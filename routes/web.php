<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ProposalController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\LogbookController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::get('/login/technician', 'Auth\LoginController@showTechnicianLoginForm');
Route::get('/login/technician', [LoginController::class,'showTechnicianLoginForm']);
//Route::get('/login/student', 'Auth\LoginController@showStudentLoginForm');
Route::get('/login/student', [LoginController::class,'showStudentLoginForm']);
Route::get('/login/lecturer', [LoginController::class,'showLecturerLoginForm']);
//Route::get('/register/technician', 'Auth\RegisterController@showTechnicianRegisterForm');
Route::get('/register/technician', [RegisterController::class,'showTechnicianRegisterForm']);
//Route::get('/register/student', 'Auth\RegisterController@showStudentRegisterForm');
Route::get('/register/student', [RegisterController::class,'showStudentRegisterForm']);
Route::get('/register/lecturer', [RegisterController::class,'showLecturerRegisterForm']);

//Route::post('/login/technician', 'Auth\LoginController@technicianLogin');
Route::post('/login/technician', [LoginController::class,'technicianLogin']);
//Route::post('/login/student', 'Auth\LoginController@studentLogin');
Route::post('/login/student', [LoginController::class,'studentLogin']);
Route::post('/login/lecturer', [LoginController::class,'lecturerLogin']);
//Route::post('/register/technician', '\Auth\RegisterController@createTechnician')->name('register');
Route::post('/register/technician', [RegisterController::class,'createTechnician']);
//Route::post('/register/student', 'Auth\RegisterController@createStudent');
Route::post('/register/student', [RegisterController::class,'createStudent']);
Route::post('/register/lecturer', [RegisterController::class,'createLecturer']);

Route::view('/home', 'home')->middleware('auth');
Route::view('/technician', 'technician');
Route::view('/student', 'student');
Route::view('/lecturer', 'lecturer');





//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::get('LectHome', [App\Http\Controllers\HomeController::class, 'index2'])->name('LectHome');

//Route::get('TechHome', [App\Http\Controllers\HomeController::class, 'index3'])->name('TechHome');

//Manage Meeting


//Manage Profile
//Student Profile
//View Student Profile Route
Route::get('/ProfileViewStudent', 'App\Http\Controllers\StudentController@viewstudent');
Route::get('/ProfileViewStudent', function(){
    $students = \App\Models\ProfileModel\student::all();
    return view('Manage Profile/ProfileViewStudent',compact('students'));
});
//Delete Student Profile Route
Route::get('ProfileViewStudent/{stud_id}', 'App\Http\Controllers\StudentController@deletestud')->name('deletestud');

//Edit Student Profile Route
Route::get('/ProfileViewStudent/{stud_id}/ProfileStudentEdit', 'App\Http\Controllers\StudentController@vieweditstud');
Route::post('/ProfileViewStudent/{stud_id}/updatestud', 'App\Http\Controllers\StudentController@updatestud');

//Lecturer Profile
//View Lecturer Profile Route
Route::get('/ProfileViewLecturer', 'App\Http\Controllers\LecturerController@viewlecturer');
Route::get('/ProfileViewLecturer', function(){
    $students = \App\Models\ProfileModel\lecturer::all();
    return view('Manage Profile/ProfileViewLecturer',compact('lecturers'));
});

//Delete Lecturer Profile Route
Route::get('ProfileViewLecturer/{lect_id}', 'App\Http\Controllers\LecturerController@deletelect')->name('deletelect');

//Edit  Lecturer Profile Route
Route::get('/ProfileViewLecturer/{lect_id}/ProfileLecturerEdit', 'App\Http\Controllers\LecturerController@vieweditlect');
Route::post('/ProfileViewLecturer/{lect_id}/updatelect', 'App\Http\Controllers\LecturerController@updatelect');

//Manage SV
Route::get('SVbooking', function() {
    return view('Manage Supervisor Hunting/SVbooking');
});
Route::get('viewSVbooking', function() {
    return view('Manage Supervisor Hunting/viewSVbooking');
});
Route::get('studRequest', function() {
    return view('Manage Supervisor Hunting/studRequest');
});
Route::get('studList', function() {
    return view('Manage Supervisor Hunting/studList');
});



//Manage Logbook
Route::get('StudentLogbook', function () {                     //for student to view logbook list
    return view('Manage Logbooks/StudentLogbook');
});
Route::get('AddLogbook', function () {                  //for student to add new logbook entry in logbook form 
    return view('Manage Logbooks/AddLogbook');
});

Route::post('StoreNewEntry','App\Http\Controllers\LogbookController@StoreNewEntry');   //to store new logbook data

Route::post('ShowLogbook','App\Http\Controllers\LogbookController@ShowLogbook');   //to student view selected logbook entry data

Route::get('StudentLogbook/{logbook_ID}', 'App\Http\Controllers\LogbookController@DeleteLogbook')->name('DeleteLogbook'); //to delete selected logbook entry

Route::get('EditLogbook', function () {                 //for student to edit selected logbook entry
    return view('Manage Logbook/EditLogbook');      
});

Route::get('LecturerLogbook', function () {             //for lecturer to view logbook list
    return view('Manage Logbook/LecturerLogbook');
});

Route::post('LecturerShowLogbook','App\Http\Controllers\LogbookController@LecturerShowLogbook');   //to lecturer view selected logbook entry data
/*
Route::get('ViewLecturerLogbook', function () {                 //for lecturer to view logbook details
    return view('Manage Logbook/ViewLecturerLogbook');       
});

Route::get('ViewStudentLogbook', function () {                 //for student to view logbook details
    return view('Manage Logbook/ViewStudentLogbook');       
}); */

//Manage Proposal
//Lecturer
Route::get('LectMainPg', function () {
    $proposals = \App\Models\ProposalModel\proposals::all();
    return view('Manage Proposal/LectMainPg', compact('proposals'));
});

//Student
Route::get('StdMainPg', function () {
    $proposal = \App\Models\ProposalModel\proposals::all();
    return view('Manage Proposal/StdMainPg', compact('proposal'));
});
Route::get('newReq', function () {
    $new = \App\Models\ProposalModel\proposals::all();
    return view('Manage Proposal/newReq', compact('new'));
});
Route::get('ViewStat', function () {
    $new1 = \App\Models\ProposalModel\proposals::all();
    return view('Manage Proposal/ViewStat', compact('new1'));
});
Route::get('ViewStat', function () {
    $new2 = \App\Models\ProposalModel\proposals::all();
    return view('Manage Proposal/ViewStat', compact('new2'));
});
Route::get('StdMainPg\{proposal_ID}', 'App\Http\Controllers\ProposalsController@delete')->name('delete');
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
    return view('Manage Inventory Usage/RequestInventory');     //return view interface to student request inventory page
});

Route::get('RequestStatus', function () {
    return view('Manage Inventory Usage/RequestStatus');       //return view interface to student request status page
});

Route::post('create','App\Http\Controllers\InventoryController@create');  //from interface to controller to insert data to interface
Route::get('RequestStatus', function () {
    $data = \App\Models\InventoryModel\_inventories::all();                 //return data from database to request status student interface
    return view('Manage Inventory Usage/RequestStatus',compact('data'));
});

// Lecturer
Route::get('StudentRequestStatus', function () {
    $data = \App\Models\InventoryModel\_inventories::all();                                     //return data from database to request status lecturer interface
    return view('Manage Inventory Usage/StudentRequestStatus',compact('data'));
});

Route::post('{inv_ID}/updateRequest','App\Http\Controllers\InventoryController@updateRequest');  //update student request status based on id

Route::get('PickUpItem', function(){
    $data = DB::select('select inv_ID, stud_matricID, stud_name, inv_name, quantity, req_status     
    from _inventories
    where req_status = "APPROVE"');
    return view('Manage Inventory Usage/PickUpItem', compact('data'));                              //return data from database in pick up item page where request status = APPROVE
});

Route::post('{inv_ID}/add','App\Http\Controllers\InventoryController@add');                         //Lecturer insert pick up item data to database 

//Technician
Route::get('InventoryDetails', function () {
    $data = \App\Models\InventoryModel\_inv_details::all();
    return view('Manage Inventory Usage/InventoryDetails',compact('data'));                         // return pick up item data from database in page inevntory details
});
Route::post('{inv_ID}/updateDetail','App\Http\Controllers\InventoryController@updateDetail');       //technician update pick up item details