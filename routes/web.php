<?php

use App\Http\Controllers\UsersController;
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

Route::get('/',[UsersController::class, 'index']) -> name('index');
Route::post('signin',[UsersController::class, 'Show_signin']) -> name('signin');
Route::post('signup',[UsersController::class, 'Show_signup']) -> name('signup');
