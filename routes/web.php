<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Manage Meeting


//Manage Profile
Route::get('ProfileViewStudent', function() {
    return view('Manage Profile/ProfileViewStudent');
});

Route::get('ProfileViewLecturer', function(){
    return view('Manage Profile/ProfileViewLecturer');
});

//Manage SV


//Manage Logbook

//Manage Proposal
Route::get('LectMainPg', function () {
    return view('Manage Proposal/LectMainPg');
});

Route::get('StdMainPg', function () {
    return view('Manage Proposal/StdMainPg');
});

Route::get('/AddReq', function () {
    return view('Manage Proposal/AddReq');
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
    return view('Manage Title/BookTitle');
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

