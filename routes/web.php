<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Technician\TechnicianController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('auth/login');
});*/

/*Route::get('/', function () {
    return view('welcome');
});*/
Auth::routes();

/*Route::prefix('student')->name('student.')->group(function(){

    Route::middleware(['guest'])->group(function(){
        Route::view('/login','dashboard.student.login')->name('login');
        Route::view('/register','dashboard.student.register')->name('register');
        Route::post('/create',[StudentController::class,'create'])->name('create');
        Route::post('/check',[StudentController::class,'check'])->name('check');
    });

    Route::middleware(['auth'])->group(function(){
        Route::view('/home','dashboard.student.home')->name('home');
    });
});

Route::prefix('technician')->name('technician.')->group(function(){

    Route::middleware(['guest:technician'])->group(function(){
        Route::view('/login','dashboard.technician.login')->name('login');
        Route::post('/check',[TechnicianController::class,'check'])->name('check');
    });

    Route::middleware(['auth:technician'])->group(function(){
        Route::view('/home','dashboard.technician.home')->name('home');
    });
});*/

Route::view('/', 'welcome');
Auth::routes();

//Route::get('/login/technician', 'Auth\LoginController@showTechnicianLoginForm');
Route::get('/login/technician', [LoginController::class,'showTechnicianLoginForm']);
//Route::get('/login/student', 'Auth\LoginController@showStudentLoginForm');
Route::get('/login/student', [LoginController::class,'showStudentLoginForm']);
//Route::get('/register/technician', 'Auth\RegisterController@showTechnicianRegisterForm');
Route::get('/register/technician', [RegisterController::class,'showTechnicianRegisterForm']);
//Route::get('/register/student', 'Auth\RegisterController@showStudentRegisterForm');
Route::get('/register/student', [RegisterController::class,'showStudentRegisterForm']);

//Route::post('/login/technician', 'Auth\LoginController@technicianLogin');
Route::post('/login/technician', [LoginController::class,'technicianLogin']);
//Route::post('/login/student', 'Auth\LoginController@studentLogin');
Route::post('/login/student', [LoginController::class,'studentLogin']);
//Route::post('/register/technician', '\Auth\RegisterController@createTechnician')->name('register');
Route::post('/register/technician', [RegisterController::class,'createTechnician']);
Route::post('/register/student', 'Auth\RegisterController@createStudent');
Route::post('/register/student', [RegisterController::class,'createStudent']);

Route::view('/home', 'home')->middleware('auth');
Route::view('/technician', 'technician');
Route::view('/student', 'student');






//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('LectHome', [App\Http\Controllers\HomeController::class, 'index2'])->name('LectHome');

Route::get('TechHome', [App\Http\Controllers\HomeController::class, 'index3'])->name('TechHome');

//Manage Meeting


//Manage Profile
Route::get('ProfileViewStudent', 'App\Http\Controllers\StudentController@viewstudent');
  
Route::get('ProfileViewLecturer', function(){
    return view('Manage Profile/ProfileViewLecturer');

}); 

Route::get('ProfileViewStudent', function(){
    $students = \App\Models\ProfileModel\student::all();
    return view('Manage Profile/ProfileViewStudent',compact('students'));
});

//Manage SV


//Manage Logbook

//Manage Proposal
//Lecturer
Route::get('LectMainPg', function () {
    return view('Manage Proposal/LectMainPg');
});
Route::get('/ListNewReq', function () {
    return view('Manage Proposal/ListNewReq');
});
Route::get('/TotalReq', function () {
    return view('Manage Proposal/TotalReq');
});

//Student
Route::get('StdMainPg', function () {
    return view('Manage Proposal/StdMainPg');
});
Route::get('/AddReq', function () {
    return view('Manage Proposal/AddReq');
});
Route::post('/AddReq', function () {
    return view('Manage Proposal/AddReq');
});
Route::get('/EditReq', function () {
    return view('Manage Proposal/EditReq');
});
Route::get('/ViewStat', function () {
    return view('Manage Proposal/ViewStat');
});


//Manage Title
Route::get('StatusTitle', function () {   //Student
    return view('Manage Title/StatusTitle');
});

Route::get('BookTitle', function () {
    return view('Manage Title/BookTitle');
});

Route::get('AddTitle', function () {      //Lecturer
    return view('Manage Title/AddTitle');
});

Route::get('ApprovalTitle', function () {
    return view('Manage Title/ApprovalTitle');
});

Route::get('EditTitle', function () {
    return view('Manage Title/EditTitle');
});

Route::get('ViewTitle', function () {
    return view('Manage Title/ViewTitle');
});

Route::get('TitleList', function () {
    return view('Manage Title/TitleList');
});

//Manage Inventory Usage
Route::get('RequestInventory', function () {
    return view('Manage Inventory Usage/RequestInventory');
});

Route::get('RequestStatus', function () {
    return view('Manage Inventory Usage/RequestStatus');
});

