<?php

use App\Http\Controllers\courseController;
use App\Http\Controllers\forgetController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\signinController;
use App\Http\Controllers\signupController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/signup',[signupController::class,'signup']);
Route::get('/',[signinController::class, 'signin']);
Route::get('/forgetpassword',[forgetController::class, 'forgetPassword']);
Route::get('/homepage',[homeController::class, 'home']);
Route::get('/course',[courseController::class,'courseLesson']);



