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


//Manage SV


//Manage Logbook

//Manage Proposal
Route::get('LectMainPg', function () {
    return view('Manage Proposal/LectMainPg');
});

Route::get('StdMainPg', function () {
    return view('Manage Proposal/StdMainPg');
});

//Manage Title

//Manage Inventory Usage
Route::get('RequestInventory', function () {
    return view('Manage Inventory Usage/RequestInventory');
});

Route::get('RequestStatus', function () {
    return view('Manage Inventory Usage/RequestStatus');
});

