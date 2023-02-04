<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Student\AdminController;
use App\Http\Controllers\Student\StudentRegistrationController;
use App\Http\Controllers\Student\BranchController;
use App\Http\Controllers\Student\CourseController;

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
//Route::view('/','welcome');

//crud routes
// Route::get('/home', [CategoryController::class, 'index']);
// Route::get('/category_add', [CategoryController::class, 'create']);
// Route::post('/category_store', [CategoryController::class, 'store']);
// Route::get('/category_edit/{id}', [CategoryController::class, 'edit']);
// Route::put('/category_update/{id}', [CategoryController::class, 'update']);
// Route::get('/category_delete/{id}', [CategoryController::class, 'delete']);
//Route::get('/test', [CategoryController::class, 'test']);

//Route::get('test', 'CategoryController@test');



//student crud operation

// Route::get('/',[StudentController::class,'show']);
// Route::get('/add',[StudentController::class,'add']);
// Route::post('/store',[StudentController::class,'store']);
// Route::get('/edit/{id}',[StudentController::class,'edit']);
// Route::put('/update/{id}',[StudentController::class,'update']);
// Route::get('/delete/{id}',[StudentController::class,'delete']);

// Route::get('/filter', [StudentController::class, 'filterCheck']);

Route::get('/',[AdminController::class, 'index'])->name('homapage');
Route::post('login',[AdminController::class, 'login'])->name('login');
Route::get('/dashboard',[AdminController::class, 'dashboard'])->name('dashboard');

Route::get('/registration',[StudentRegistrationController::class, 'create'])->name('registration');
Route::post('/store',[StudentRegistrationController::class, 'store'])->name('store');
Route::get('/details',[StudentRegistrationController::class, 'index'])->name('home');
Route::post('/details2',[StudentRegistrationController::class, 'index'])->name('home');
// Route::get('/home',[StudentRegistrationController::class, 'show'])->name('show');
// Route::get('/student_edit/{id}',['as'=>'student.edit', 'uses'=> 'StudentRegistrationController@edit'])->name('edit');
Route::get('/student_edit/{id}',[StudentRegistrationController::class, 'edit'])->name('edit');
Route::post('/student_update/{id}',[StudentRegistrationController::class, 'update'])->name('update');
Route::get('/student_delete/{id}',[StudentRegistrationController::class, 'destroy'])->name('delete');
Route::get('/student_show/{id}',[StudentRegistrationController::class, 'show'])->name('show');
// Route::get('/fee-form',['uses'=> 'StudentRegistrationController@fee_form','as'=>'student.fee']);
Route::get('/fee-form/{id}',[StudentRegistrationController::class, 'fee_form'])->name('fees');
Route::post('/fee-add',[StudentRegistrationController::class, 'feeadd'])->name('fees');

//branch 
Route::get('/branch_create',[BranchController::class, 'create'])->name('create');
Route::post('/branch_store',[BranchController::class, 'store'])->name('store');
Route::get('/branch_edit/{id}',[BranchController::class, 'edit'])->name('edit');
Route::post('/branch_update/{id}',[BranchController::class, 'update'])->name('update');
Route::get('/branch_delete/{id}',[BranchController::class, 'destroy'])->name('delete');
// Route::get('/branch_show',[BranchController::class, 'show'])->name('show');
Route::get('/branch_show',[BranchController::class, 'index'])->name('show');

//courses
Route::get('/course_create',[CourseController::class, 'create'])->name('create');
Route::post('/course_store',[CourseController::class, 'store'])->name('store');
Route::get('/course_edit/{id}',[CourseController::class, 'edit'])->name('edit');
Route::post('/course_update/{id}',[CourseController::class, 'update'])->name('update');
Route::get('/course_delete/{id}',[CourseController::class, 'destroy'])->name('delete');
// Route::get('/course_show',[CourseController::class, 'show'])->name('show');
Route::get('/course_show',[CourseController::class, 'index'])->name('show');

// stnudent courses registration
Route::post('/student/courses',[StudentRegistrationController::class, 'courses'])->name('courses');
Route::get('/studentdetails-ajax',[StudentRegistrationController::class, 'ajax_show'])->name('ajax');
