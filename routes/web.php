<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
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

Route::get('/', [AuthController::class, "registerPage"])->name("register_view");
Route::get('/login',[AuthController::class, "LoginPage"])->name("login_view");
Route::post('/', [AuthController::class, "register"])->name("register");
Route::post('/login', [AuthController::class, 'login'])->name("login");

Route::get('/lessons', [UserController::class, "allLessons"])->name("lessons.all");


//to do
// 1. User UI
// 2. Tutor's UI
