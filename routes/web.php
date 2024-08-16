<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Front\UserController;
use App\Http\Controllers\JobController;
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

Route::get('/', [AuthController::class, 'index'])->name('index');
Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'checkAuth'])->name('login.post');

    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'store'])->name('register.post');

});
    Route::get('find-jobs', [JobController::class, 'findJobs'])->name('find.jobs');

Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('get-country', [AuthController::class, 'getCountries'])->name('country');
Route::get('get-states/', [AuthController::class, 'getStates'])->name('state');
Route::get('get-cities/', [AuthController::class, 'getCities'])->name('city');

Route::middleware(['auth'])->group(function () {

    Route::get('/profile', [UserController::class, 'profile'])->name('profile');
    Route::post('/profile', [UserController::class, 'completeProfile'])->name('profile.post');

    Route::get('find-candidate', [JobController::class, 'findCandidates'])->name('find.candidates');

    Route::get('post-job', [JobController::class, 'index'])->name('post.job');
    Route::post('store-job', [JobController::class, 'store'])->name('job.store');
});
