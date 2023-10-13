<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index', function () {
    return view('index');
});
Route::prefix('dashboard')->middleware('auth')->group(function (){
    Route::get('/setting', [\App\Http\Controllers\admin\settingController::class, 'index'])->name('index');
    Route::post('/setting', [\App\Http\Controllers\admin\settingController::class, 'insert'])->name('setting_post');
    Route::resource('years', \App\Http\Controllers\admin\yearController::class);
    Route::resource('section', \App\Http\Controllers\admin\sectionController::class);
    Route::resource('class', \App\Http\Controllers\admin\classController::class);
    Route::resource('subject', \App\Http\Controllers\admin\subjectController::class);
    Route::resource('designation', \App\Http\Controllers\admin\designationController::class);
    Route::resource('teacher', \App\Http\Controllers\admin\teacherController::class);
    Route::resource('ClassTeacher', \App\Http\Controllers\admin\classTeacherController::class);
    Route::resource('student', \App\Http\Controllers\admin\studentController::class);
    Route::resource('promotion', \App\Http\Controllers\admin\promotionController::class);
    Route::resource('studentSMS', \App\Http\Controllers\admin\smsStudentController::class);
    Route::resource('sms', \App\Http\Controllers\sms\smsController::class);

});
