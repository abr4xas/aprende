<?php

use App\Http\Controllers\Dash\DashHomeController;
use App\Http\Controllers\Front\CourseHomeController;
use App\Http\Controllers\Front\CourseShowController;
use App\Http\Controllers\Front\HomeController;
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


Route::get('/', HomeController::class)->name('home');
Route::get('/courses', CourseHomeController::class)->name('courses.home');
Route::get('/course/{course:slug}', CourseShowController::class)->name('course.show');


Route::middleware(['auth'])->group(function () {
    Route::prefix('dashboard')->group(function () {
        Route::get('/', DashHomeController::class)->name('dashboard');
    });
});


require __DIR__.'/auth.php';
