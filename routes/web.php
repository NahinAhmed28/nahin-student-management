<?php

use App\Http\Controllers\InstitutionController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DisciplineController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\Institution\LoginController as NewLoginController;
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


Route::middleware(['auth' , 'institute'])->group(function () {

Route::resource('/institution', InstitutionController::class);
Route::resource('/course', CourseController::class);
Route::resource('/discipline', DisciplineController::class);
Route::resource('/enrollment', EnrollmentController::class);
Route::get('/lists' ,  [InstitutionController::class, 'list'])->name('institution.list');
Route::get('/user' ,  [InstitutionController::class, 'user'])->name('institution.user');
Route::get('/notification' ,  [InstitutionController::class, 'notification'])->name('institution.notification');

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
Route::get('/admin/login' ,  [NewLoginController::class, 'login'])->name('institution.login');

Route::get('/logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


