<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/category', [CategoryController::class, 'allCategory'])->name('category.index');
Route::get('/jobcategory/{jobCategory}', [JobController::class, 'joblist'])->name('jobcategory');
Route::get('/jobdetail/{jobs}', [JobController::class, 'jobDetail'])->name('jobdetail');
Route::get('/job', [JobController::class, 'index'])->name('job.index');
Route::post('/job/{jobs}', [JobController::class, 'applyNow'])->name('job.apply');

