<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileCompleteRequest;
use App\Http\Requests\ProfileUpdateRequest;
use App\Models\EmpResume;
use App\Models\EmpSkill;
use App\Models\JobIndustry;
use App\Models\Qualification;
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
            $data['job_industries'] = JobIndustry::all();
            $data['qualifications'] = Qualification::all();
            return view('front.auth.profile_complete', ['data' => $data]);
        }
        abort(403);
    }

    public function settings(Request $request)
    {
        if (Gate::allowIf(['company', 'employee'])) {
            $user = User::with(['skills', 'country', 'state', 'city'])->find(Auth::id());
            $data['job_industries'] = JobIndustry::all();
            $data['qualifications'] = Qualification::all();
            return view('front.pages.setings', ['user' => $user, 'data' => $data]);
        }
        abort(404);
    }

    

    #---- Profile completed ----#
    public function completeProfile(ProfileCompleteRequest $request)
    {
        DB::beginTransaction();
        try {
            $user = User::find(Auth::id());
            $user->phone = $request->phone;
            $user->country_id = $request->country;
            $user->state_id = $request->state;
            $user->city_id = $request->city;
            $user->profile = $request->profile;
            $user->industry_id = $request->industry;
            $user->qualifications = json_encode($request->qualification);
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
                $resume = $this->uploadMedia($request->file('resume'), 'resumes');
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

    #--- update Profile --#
    public function updateProfile(ProfileUpdateRequest $request)
    {
        try {
            $user = User::find(Auth::id());
            $user->phone = $request->phone;
            $user->country_id = $request->country;
            $user->state_id = $request->state;
            $user->city_id = $request->city;
            if (Auth::user()->role == 'employee') {
                $user->profile = $request->profile;
                $user->industry_id = $request->industry;
                $user->qualifications = json_encode($request->qualification);
                $user->exp = $request->exp;
            }
            if (Auth::user()->role == 'company') {
                $user->company_name = $request->company_name;
                $user->company_type = $request->company_type;
            }

            if ($request->file('image')) {
                $image = $this->resizeImage($request->file('image'));
                $user->image = $image;
            }
            $user->save();

            if ($request->file('resume')) {
                $resume = $this->uploadMedia($request->file('resume'), 'resumes');
                $empResume = EmpResume::where('user_id', Auth::id())->first();
                $empResume->file = $resume;
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
            return redirect()->back()->with(['success' => 'Profile Update']);
        } catch (Exception $e) {
            dd($e);
            return redirect()->back()->with(['error', 'Something went wrong']);
        }
    }

    #--- RESUME PAGE ---#
    public function resume($userId)
    {
        dd($userId);
    }
}
