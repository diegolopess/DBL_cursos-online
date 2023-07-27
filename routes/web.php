<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\UserController;
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

Route::get('/', [CourseController::class, 'index']);
Route::get('/users', [UserController::class, 'index'])->name('users.profile');
Route::get('/modules', [ModuleController::class, 'index'])->name('view.modules');
Route::get('/lessons', [LessonController::class, 'index'])->name('view.lessons');

// Route::get('/', function () {
//     return view('welcome');
// });
