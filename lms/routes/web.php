<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('students/trash/{id}', [StudentController::class, 'trash']) -> name('students.trash');

Route::get('students/trashed', [StudentController::class, 'trashed']) -> name('students.trashed');

Route::get('students/restore/{id}', [StudentController::class, 'restored']) -> name('students.restore');

Route::resource('students', StudentController::class);

Route::get('courses/destroy/{id}', [CourseController::class, 'destroy']) -> name('courses.destroy');

Route::get('courses/trash/{id}', [CourseController::class, 'trash']) -> name('courses.trash');

Route::get('courses/trashed', [CourseController::class, 'trashed']) -> name('courses.trashed');

Route::get('courses/restore/{id}', [CourseController::class, 'restored']) -> name('courses.restore');

Route::resource('courses', CourseController::class);

Route::get('courses/destroy/{id}', [CourseController::class, 'destroy']) -> name('courses.destroy');

