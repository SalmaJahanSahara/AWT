<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\StudentController;
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

Route::get('/', [PagesController::class,'index']);
//Route::get('/login','PagesController@index'); for bellow v8
Route::get('/login', [PagesController::class,'login']);
Route::get('/registration',[PagesController::class,'register'])->name('registration');

Route::get('/student/create',[StudentController::class, 'create']);
Route::get('/student/delete',[StudentController::class, 'delete']);
Route::get('/student/edit',[StudentController::class, 'edit']);
Route::get('/student/get/{id?}/{name}/{dob}',[StudentController::class, 'get'])->name('student.details');
Route::get('/student/list',[StudentController::class, 'list'])->name('student.list');