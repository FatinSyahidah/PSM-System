<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

//use Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;

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
        //$this->middleware('guest')->except('logout');
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:technician')->except('logout');
        $this->middleware('guest:student')->except('logout');
    }

    public function showTechnicianLoginForm(){
        return view('auth.login', ['url' => 'technician']);
    }

    public function technicianLogin(Request $request){
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        if(Auth::guard('technician')->attempt(['email' => $request->email, 'password'=> $request->password], $request->get('remember'))){

            return redirect()->intended('/technician');
        }
        return back()->withInput($request->only('email','remember'));
    }

    public function showStudentLoginForm(){
        return view('auth.login', ['url' => 'student']);
    }

    public function studentLogin(Request $request){
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        if(Auth::guard('student')->attempt(['email' => $request->email, 'password'=> $request->password], $request->get('remember'))){

            return redirect()->intended('/student');
        }
        return back()->withInput($request->only('email','remember'));
    }
}
