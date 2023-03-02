<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyInfoController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserRoleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TrailorController;
use App\Http\Controllers\ReleaseMovieController;
use App\Http\Controllers\ComingMovieController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FavouriteController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\UserViewController;
use Illuminate\Support\Facades\Auth;

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

// Admin Routes Starts Here =================================================================
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::resource('/dashboard', DashboardController::class);
    Route::resource('/user', UserController::class);
    Route::resource('/userRole', UserRoleController::class);
    Route::resource('/companyInfo', CompanyInfoController::class);
    Route::resource('/category', CategoryController::class);
    Route::resource('/trailor', TrailorController::class);
    Route::resource('/releaseMovie', ReleaseMovieController::class);
    Route::resource('/comingMovie', ComingMovieController::class);
});
//Admin Rotues End Here ===================================================================== 

//User Routes Start Here =================================================================
Route::prefix('')->middleware('auth')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\UserViewController::class, 'index'])->name('index');
    Route::get('/movie', [App\Http\Controllers\UserViewController::class, 'movie'])->name('movie');
    Route::get('/about', [App\Http\Controllers\UserViewController::class, 'about'])->name('about');
    Route::get('/contact', [App\Http\Controllers\UserViewController::class, 'contact'])->name('contact');
    Route::get('/profile', [App\Http\Controllers\UserViewController::class, 'profile'])->name('profile');
    Route::get('/detail', [App\Http\Controllers\UserViewController::class, 'detail'])->name('detail');
    Route::get('/rating', [App\Http\Controllers\UserViewController::class, 'rating'])->name('rating');
    Route::get('/favourite', [App\Http\Controllers\UserViewController::class, 'favourite'])->name('favourite');

});
// User Routes End Here =================================================================

Route::middleware('auth')->group(function () {
//  Status Update Route ================================================================= 
// User Status 
Route::get('user/onStatus/{id}',[App\Http\Controllers\UserController::class, 'onStatus']);
Route::get('user/offStatus/{id}',[App\Http\Controllers\UserController::class, 'offStatus']);
// Category Status
Route::get('category/onStatus/{id}',[App\Http\Controllers\CategoryController::class, 'onStatus']);
Route::get('category/offStatus/{id}',[App\Http\Controllers\CategoryController::class, 'offStatus']);
// Released Movies Status
Route::get('releaseMovie/onStatus/{id}',[App\Http\Controllers\ReleaseMovieController::class, 'onStatus']);
Route::get('releaseMovie/offStatus/{id}',[App\Http\Controllers\ReleaseMovieController::class, 'offStatus']);
// Trailor Status
Route::get('trailor/onStatus/{id}',[App\Http\Controllers\TrailorController::class, 'onStatus']);
Route::get('trailor/offStatus/{id}',[App\Http\Controllers\TrailorController::class, 'offStatus']);
// User Role Status
Route::get('userRole/onStatus/{id}',[App\Http\Controllers\UserRoleController::class, 'onStatus']);
Route::get('userRole/offStatus/{id}',[App\Http\Controllers\UserRoleController::class, 'offStatus']);
// Favourite Add or Remove Users
Route::get('favourite/favourite/{id}',[App\Http\Controllers\FavouriteController::class, 'favourite']);
Route::get('favourite/dislike/{id}',[App\Http\Controllers\FavouriteController::class, 'dislike']);
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

