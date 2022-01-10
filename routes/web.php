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

//Manage Inventory Usage
Route::get('RequestInventory', function () {
    return view('Manage Inventory Usage/RequestInventory');
});

Route::get('RequestStatus', function () {
    return view('Manage Inventory Usage/RequestStatus');
});

