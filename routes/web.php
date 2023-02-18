<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\WelcomeController;
use \App\Http\Controllers\CoursesController;
use \App\Http\Controllers\SearchController;
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

Route::get('/', [WelcomeController::class, 'index'])
    ->name('welcome.index');

Route::get('/cursos/{cat}', [CoursesController::class, 'index'])
    ->name('cursos.index');

Route::get('/curso/{id}', [CoursesController::class, 'show'])
    ->name('curso.index');

Route::post('/', [WelcomeController::class, 'show'])->name('welcome.show');

Route::get('/search/{search}', [SearchController::class, 'index'])
    ->name('search.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::patch('/profile/general', [ProfileController::class, 'updateGeneral'])->name('profile.updateGeneral');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get(
    '/a', function (){
    return "nada";
}
)->middleware('role:Admin');

require __DIR__.'/auth.php';
