<?php

use App\Http\Controllers\InstitutionController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DisciplineController;
use App\Http\Controllers\EnrollmentController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('institution', InstitutionController::class);
Route::resource('course', CourseController::class);
Route::resource('discipline', DisciplineController::class);
Route::resource('enrollment', EnrollmentController::class);
Route::get('/institute/lists' ,  [InstitutionController::class, 'list'])->name('institution.list');
Route::get('/institute/user' ,  [InstitutionController::class, 'user'])->name('institution.user');







Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


