<?php

use App\Http\Controllers\course\CourseController;
use App\Http\Controllers\dashboard\HomeDashboardController;
use App\Http\Controllers\pages\AboutController;
use App\Http\Controllers\pages\auth\ForgotPasswordController;
use App\Http\Controllers\pages\auth\LoginController;
use App\Http\Controllers\pages\auth\RegisterController;
use App\Http\Controllers\pages\ContactController;
use App\Http\Controllers\pages\HomeController;
use App\Http\Livewire\Pages\Dashboard\Home;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', AboutController::class);

// Contact Us
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact_post');

// Course
Route::get('/series', [CourseController::class, 'index'])->name('courses');
Route::get('/series/{slug}/{id}', [CourseController::class, 'play_video'])->middleware('user_login')->name('course_video');
Route::get('/series/{slug}', [CourseController::class, 'show'])->name('single_course');

// Auth
Route::prefix('auth')->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('login_post');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::get('/register', [RegisterController::class , 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'register'])->name('register_post');

    Route::get('/reset_password/{link}', [ForgotPasswordController::class , 'index'])->name('reset-password');
    Route::get('/forget_password', [ForgotPasswordController::class , 'index'])->name('forget-password');
    Route::post('/forget_password', [ForgotPasswordController::class , 'resetPassword'])->name('forget-password-post');
});

// User Dashboard
//Route::get('/dashboard', [HomeDashboardController::class, 'index'])->middleware('user_login')->name('dashboard');
Route::get('dashboard', [Home::class, 'render'])->middleware('user_login')->name('dashboard');
Route::get('dashboard/edit_profile', [Home::class, 'render'])->middleware('user_login')->name('edit_profile');


// Admin
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
