<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/teacherindex',[studentController::class,'teacherindex']);
Route::get('/tregister',[studentController::class,'tregister']);
Route::post('/tinsert',[studentController::class,'tinsert']);
Route::get('/tlogin',[studentController::class,'tlogin']);
Route::post('/tloginaction',[studentController::class,'tloginaction']);
Route::get('/teacherdashboard',[studentController::class,'teacherdashboard']);

Route::get('/tedit',[studentController::class,'tedit']);
Route::post('/teditaction/{id}',[studentController::class,'teditaction']);
Route::get('/notesupload',[studentController::class,'notesupload']);
Route::post('/uploadnoteaction',[studentController::class,'uploadnoteaction']);
Route::get('/addsyllabus',[studentController::class,'addsyllabus']);
Route::post('/addslbsaction',[studentController::class,'addslbsaction']);

Route::get('/addtmetble',[studentController::class,'addtmetble']);
Route::post('/addtmetbleaction',[studentController::class,'addtmetbleaction']);
Route::get('/tlogout',[studentController::class,'tlogout']);
Route::get('/adminindex',[studentController::class,'adminindex']);
Route::get('/adminlogin',[studentController::class,'adminlogin']);
Route::post('/adminloginaction',[studentController::class,'adminloginaction']);
Route::get('/admindashboard',[studentController::class,'admindashboard']);
Route::get('/viewteacher',[studentController::class,'viewteacher']);
Route::get('/viewnotesadmin',[studentController::class,'viewnotesadmin']);
Route::get('/viewslbs',[studentController::class,'viewslbs']);
Route::get('/viewtmetbleadmin',[studentController::class,'viewtmetbleadmin']);

Route::get('/noteapprove/{id}',[studentController::class,'noteapprove']);
Route::get('/notedecline/{id}',[studentController::class,'notedecline']);
Route::get('/slbsapprove/{id}',[studentController::class,'slbsapprove']);
Route::get('/slbsdecline/{id}',[studentController::class,'slbsdecline']);
Route::get('/tmetbleapprove/{id}',[studentController::class,'tmetbleapprove']);
Route::get('/tmetbledecline/{id}',[studentController::class,'tmetbledecline']);
Route::get('/alogout',[studentController::class,'alogout']);
Route::get('/studentindex',[studentController::class,'studentindex']);
Route::get('/sregister',[studentController::class,'sregister']);
Route::post('/sinsert',[studentController::class,'sinsert']);
Route::get('/studentlogin',[studentController::class,'studentlogin']);
Route::post('/sloginaction',[studentController::class,'sloginaction']);
Route::get('/studentdashboard',[studentController::class,'studentdashboard']);
Route::get('/sedit',[studentController::class,'sedit']);
Route::post('/seditaction/{id}',[studentController::class,'seditaction']);
Route::get('/viewnotes',[studentController::class,'viewnotes']);
Route::get('/studentlogout',[studentController::class,'studentlogout']);
Route::get('/viewstudentslbs',[studentController::class,'viewstudentslbs']);
Route::get('/viewtmetable',[studentController::class,'viewtmetable']);
Route::get('/viewstudent',[studentController::class,'viewstudent']);
Route::get('/viewstudentteacher',[studentController::class,'viewstudentteacher']);


