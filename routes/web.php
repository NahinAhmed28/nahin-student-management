<?php

use App\Http\Controllers\InstitutionController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DisciplineController;
use App\Http\Controllers\EnrollmentController;
use Illuminate\Support\Facades\Auth;
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


Route::middleware(['auth'])->group(function () {

Route::resource('institution/index', InstitutionController::class);
Route::resource('institution/course', CourseController::class);
Route::resource('institution/discipline', DisciplineController::class);
Route::resource('institution/enrollment', EnrollmentController::class);
Route::get('/institution/lists' ,  [InstitutionController::class, 'list'])->name('institution.list');
Route::get('/institution/user' ,  [InstitutionController::class, 'user'])->name('institution.user');
Route::get('/institution/notification' ,  [InstitutionController::class, 'notification'])->name('institution.notification');

});


Route::middleware(['auth'])->group(function () {
Route::resource('student', StudentController::class);
Route::get('/students/courses' ,  [CourseController::class, 'stuIndex'])->name('student.course');
Route::get('/students/institutions' ,  [InstitutionController::class, 'stuIndex'])->name('student.institution');
Route::get('/students/disciplines' ,  [DisciplineController::class, 'stuIndex'])->name('student.discipline');
Route::get('/students/enrollment' ,  [EnrollmentController::class, 'stuIndex'])->name('student.enrollment');
Route::get('/students/user' ,  [StudentController::class, 'stuInfo'])->name('student.user');


});




Auth::routes();
Route::get('/logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


