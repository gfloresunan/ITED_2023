<?php

use Illuminate\Support\Facades\Route;
use GuzzleHttp\Promise\Create;
use Symfony\Component\Console\Input\Input;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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
	return view('welcome');
})->name('welcome');

Route::get('/register', [RegisterController::class, 'show']);

Route::post('/register', [RegisterController::class, 'register']);

Route::get('/login', [LoginController::class, 'show']);

Route::post('/login', [LoginController::class, 'login']);

Route::get('/home', [HomeController::class, 'show']);

Route::get('/home2', [HomeController::class, 'show2']);


/*Route::get('/auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'AuthController@postLogin');

Route::get('/auth/register', 'App\Http\Controllers\AuthController@create');
Route::post('auth/register', 'AuthController@postRegister');*/

