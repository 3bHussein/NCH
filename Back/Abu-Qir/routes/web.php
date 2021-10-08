<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InstUserController;
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
App::setLocale('ar');


Route::get('/',[InstUserController::class,'index'])->name('login');;
Route::post('/login',[InstUserController::class,'login'])->name('login.check');
Route::get('/logout', [InstUserController::class, 'logout'])->name('login.out');
Route::group(['prefix' => '/', 'middleware' => ['check.user:admin']], function () {
    Route::get('/dashboard', [InstUserController::class, 'dashboard'])->name('dashboard');
    Route::post('/addUser', [InstUserController::class, 'addUser'])->name('add.user');
});
Route::group(['prefix' => '/', 'middleware' => ['check.user:admin:student-affair']], function () {
    Route::get('/studentForm', [StudentController::class, 'index'])->name('student.form');
    Route::get('/studentUsername', [StudentController::class, 'getLastUsername'])->name('student.username');
    Route::post('/addStudent',[StudentController::class, 'addStudent'])->name('add.student');
});
