<?php

use Illuminate\Support\Facades\Route;
//Create Route
Route::get('years/current',[\App\Http\Controllers\admin\yearController::class, 'year_view'])->name('year_view');
Route::delete('/years/destroy/{id}',[\App\Http\Controllers\admin\yearController::class, 'year_delete']);
// create Section
Route::get('section/current',[\App\Http\Controllers\admin\sectionController::class, 'section_view'])->name('section_view');
Route::delete('/section/destroy/{id}',[\App\Http\Controllers\admin\sectionController::class, 'section_delete']);
//class
Route::get('class/current',[\App\Http\Controllers\admin\classController::class, 'class_view'])->name('class_view');
Route::delete('/class/destroy/{id}',[\App\Http\Controllers\admin\classController::class, 'class_delete']);
// Subject
Route::get('subject/current',[\App\Http\Controllers\admin\subjectController::class, 'subject_view'])->name('subject_view');
Route::delete('/subject/destroy/{id}',[\App\Http\Controllers\admin\subjectController::class, 'subject_delete']);
//Designation
Route::get('designation/current',[\App\Http\Controllers\admin\designationController::class, 'designation_view'])->name('designation_view');
Route::delete('/designation/destroy/{id}',[\App\Http\Controllers\admin\designationController::class, 'designation_delete']);
//Teacher
Route::get('teacher/current',[\App\Http\Controllers\admin\designationController::class, 'teacher_view'])->name('teacher_view');
Route::delete('/teacher/destroy/{id}',[\App\Http\Controllers\admin\designationController::class, 'teacher_delete']);

//promotion
Route::post('student/promotion', [\App\Http\Controllers\admin\promotionController::class, 'promotionData'])->name('promotionData');

//SMS Setup

