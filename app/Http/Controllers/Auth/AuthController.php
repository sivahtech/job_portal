<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Country;
use App\Models\State;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{
    #--- load index blade file ---#
    public function index()
    {
        return view('front.pages.index');
    }

    #---- load login blade file ----#
    public function login(Request $request)
    {
        return view('front.auth.login');
    }

    #--- load forgot password blade file ---#
    public function forgotPassword(Request $request)
    {
        return view('front.auth.forgot_pasword');
    }

    #--- login ---#
    public function checkAuth(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        try {
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
                // dd(Auth::user());
                // if (Auth::user()->role === 'company') {
                //     dd(Auth::user());
                // }
                // if (Auth::user()->role === 'employee') {
                //     dd(Auth::user());
                // }
                return redirect()->route('index');
            }
            return Redirect::back()->with(['error' => 'Credentials not matched.']);
        } catch (Exception $e) {
            abort(400);
        }
    }


    #--- logout --#
    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }

    #--- get Countries ---#
    public function getCountries(Request $request)
    {
        $search = $request->input('search');
        $countries = Country::select('id', 'name as text')
            ->when($search, function ($query, $search) {
                return $query->where('name', 'like', "%{$search}%");
            })
            ->limit(25)->get();

        return response()->json($countries);
    }

    public function getStates(Request $request)
    {
        $search = $request->input('search');
        $countryId = $request->input('country_id');

        $states = State::select('id', 'name as text')
            ->where('country_id', $countryId)
            ->when($search, function ($query, $search) {
                return $query->where('name', 'like', "%{$search}%");
            })
            ->limit(25)->get();

        return response()->json($states);
    }

    public function getCities(Request $request)
    {
        $search = $request->input('search');
        $stateId = $request->input('state_id');

        $cities = City::select('id', 'name as text')
            ->where('state_id', $stateId)
            ->when($search, function ($query, $search) {
                return $query->where('name', 'like', "%{$search}%");
            })
            ->limit(25)->get();

        return response()->json($cities);
    }
}
