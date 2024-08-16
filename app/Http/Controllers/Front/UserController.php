<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\EmpResume;
use App\Models\EmpSkill;
use App\Models\User;
use App\Traits\ImageTrait;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class UserController extends Controller
{
    use ImageTrait;
    #--- load blade file ----#
    public function profile(Request $request)
    {
        if (Gate::allows('profile_status')) {
            return view('front.auth.profile_complete');
        }
        abort(404);
    }

    protected function validationRules($role)
    {
        $rules = [
            'phone' => 'required|integer',
            'image' => 'required|image|mimes:jpeg,png|max:2048',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
        ];

        if ($role === 'employee') {
            $rules['exp'] = 'required';
            $rules['skills'] = 'required';
            $rules['resume'] = 'required|mimes:pdf|max:2048';
        }

        return $rules;
    }

    #---- Profile completed ----#
    public function completeProfile(Request $request)
    {
        $request->validate($this->validationRules(Auth::user()->role));
        DB::beginTransaction();
        try {
            $user = User::find(Auth::id());
            $user->phone = $request->phone;
            $user->country = $request->country;
            $user->state = $request->state;
            $user->city = $request->city;
            if ($request->exp) {
                $user->exp = $request->exp;
            }
            if ($request->file('image')) {
                $image = $this->resizeImage($request->file('image'));
                $user->image = $image;
            }
            $user->is_porfile_completed = true;
            $user->save();

            if ($request->file('resume')) {
                $resume = $this->uploadMedia($request->file('image'), 'resumes');
                $empResume = new EmpResume();
                $empResume->file = $resume;
                $empResume->user_id = Auth::id();
                $empResume->save();
            }

            if ($request->skills) {
                foreach ($request->skills as $skill) {
                    $empSkill = new EmpSkill();
                    $empSkill->user_id = Auth::id();
                    $empSkill->name = $skill;
                    $empSkill->save();
                }
            }
            DB::commit();
            return redirect()->route('index')->with(['success' => 'Profile completed']);
        } catch (Exception $e) {
            DB::rollBack();
            dd($e);
            return redirect()->back()->with(['error', 'Something went wrong']);
        }
    }
}
