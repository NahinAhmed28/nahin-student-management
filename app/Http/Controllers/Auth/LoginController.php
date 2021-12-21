<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Session;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function login(Request $request)
    {
        $input = $request->all();
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (auth()->attempt(array('email' => $input['email'], 'password' => $input['password']))) {
            if($request->type == "Institution" && auth()->user()->roles()->where('role_id' , User::Role['Institution']) ) {
                Session::put('type' , "Institution");
                return redirect()->route('institution.index');
            }
            elseif ($request->type == "Student" && auth()->user()->roles()->where('role_id' , User::Role['Student'])) {
                Session::put('type' , "Student");
                return redirect()->route('student.index');
            }
        }
        else
        {
            if($request->type == "Institution"){
                return redirect()->route('institution.login')->withErrors('Email-Address And Password Are Wrong.');
            }
            return redirect()->route('login')->withErrors('Email-Address And Password Are Wrong.');
        }
    }

    public function logout(Request $request)
    {
        if(Session::get('type') == "Institution")
        {
            Auth::logout();
            return redirect('/admin/login');
        }
        Auth::logout();
        return redirect('/login');
    }
}
