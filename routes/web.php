<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProposalController;

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

Route::get('LectHome', [App\Http\Controllers\HomeController::class, 'index2'])->name('LectHome');

Route::get('TechHome', [App\Http\Controllers\HomeController::class, 'index3'])->name('TechHome');

//Manage Meeting


//Manage Profile
Route::get('ProfileViewStudent', function() {
    return view('Manage Profile/ProfileViewStudent');
});

Route::get('ProfileViewLecturer', function(){
    return view('Manage Profile/ProfileViewLecturer');
});

//Manage SV
Route::get('SVbooking', function() {
    return view('Manage Supervisor Hunting/SVbooking');
});

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
Route::view('form', 'Manage Proposal/newReq');
Route::post('submit', 'ProposalController@save');

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

