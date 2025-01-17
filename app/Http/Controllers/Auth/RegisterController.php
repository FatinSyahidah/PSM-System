<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\ProfileModel\Lecturer;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Technician;
use App\Models\ProfileModel\student;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
        $this->middleware('guest:technician');
        $this->middleware('guest:student');
        $this->middleware('guest:lecturer');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function showTechnicianRegisterForm(){
        return view('auth.register', ['url' => 'technician']);
    }

    public function showStudentRegisterForm(){
        return view('auth.register', ['url' => 'student']);
    }

    public function showLecturerRegisterForm(){
        return view('auth.register', ['url' => 'lecturer']);
    }

    protected function createTechnician(Request $request)
    {
        $this->validator($request->all())->validate();
        $tech = Technician::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->intended('login/technician')->with('success','Registered Successfully');
    }

    protected function createStudent(Request $request)
    {
        $this->validator($request->all())->validate();
        $stud = student::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->intended('login/student');
    }

    protected function createLecturer(Request $request)
    {
        $this->validator($request->all())->validate();
        $lect = Lecturer::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->intended('login/lecturer');
    }
}
