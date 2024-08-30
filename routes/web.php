<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ContentController;
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
Route::get('job-details/{id}', [JobController::class, 'jobDetails'])->name('job.details');

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [UserController::class, 'profile'])->name('profile');
    Route::get('/settings', [UserController::class, 'settings'])->name('settings');
    Route::get('/download-resume', [UserController::class, 'getDownload'])->name('download.resume');

    Route::post('/profile', [UserController::class, 'completeProfile'])->name('profile.post');
    Route::post('update-profile', [UserController::class, 'updateProfile'])->name('profile.update');

    Route::get('find-candidate', [JobController::class, 'findCandidates'])->name('find.candidates');
    Route::post('apply-job', [JobController::class, 'applyJob'])->name('apply.job');
    Route::get('post-job', [JobController::class, 'index'])->name('post.job');
    Route::get('my-job', [JobController::class, 'myJobs'])->name('my.job');
    Route::get('applied-jobs', [JobController::class, 'appliedJobs'])->name('applied.jobs');
    Route::get('edit-job/{id}', [JobController::class, 'editJobs'])->name('job.edit');
    Route::put('update-job/{jobId}', [JobController::class, 'updateJobs'])->name('job.update');
    Route::get('myjob-details/{id}', [JobController::class, 'myJobDetails'])->name('myjob.details');

    Route::get('resume/{userId}/{jobId?}', [UserController::class, 'resume'])->name('resume');


    Route::post('store-job', [JobController::class, 'store'])->name('job.store');
});



#-- admin routes ---#
Route::prefix('admin')->group(function () {
    Route::get('logout', [AdminController::class, 'logout'])->name('admin.logout');
    Route::post('/login', [AdminController::class, 'checkAuth'])->name('admin.login.post');

    Route::get('/', [AdminController::class, 'index'])->name('admin.login');
    Route::get('/companies', [AdminController::class, 'company'])->name('admin.company');
    Route::get('/employees', [AdminController::class, 'employees'])->name('admin.employees');
    Route::get('/jobs', [AdminController::class, 'jobs'])->name('admin.jobs');

    Route::get('/jobs-categories', [AdminController::class, 'jobsCategory'])->name('jobs.category');
    Route::get('/jobs-roles', [AdminController::class, 'jobsRoles'])->name('jobs.roles');
    Route::get('/jobs-types', [AdminController::class, 'jobsTypes'])->name('jobs.types');
    Route::get('/jobs-industries', [AdminController::class, 'jobsIndustry'])->name('jobs.industries');

    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');


    Route::post('create-category', [ContentController::class, 'createCategory'])->name('create.category');
    Route::get('get-category', [ContentController::class, 'getCategory'])->name('get.category');
    Route::get('delete-category/{id}', [ContentController::class, 'deleteCategory'])->name('delete.category');

    Route::post('create-role', [ContentController::class, 'createRole'])->name('create.role');
    Route::get('get-role', [ContentController::class, 'getRole'])->name('get.role');
    Route::get('delete-role/{id}', [ContentController::class, 'deleteRole'])->name('delete.role');

    Route::post('create-type', [ContentController::class, 'createType'])->name('create.type');
    Route::get('get-type', [ContentController::class, 'getType'])->name('get.type');
    Route::get('delete-type/{id}', [ContentController::class, 'deleteType'])->name('delete.type');

    Route::post('create-industry', [ContentController::class, 'createIndustry'])->name('create.industry');
    Route::get('get-industry', [ContentController::class, 'getIndustry'])->name('get.industry');
    Route::get('delete-industry/{id}', [ContentController::class, 'deleteIndustry'])->name('delete.industry');
});
