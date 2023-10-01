<?php

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

use Illuminate\Support\Facades\Route;
use Modules\Employee\Http\Controllers\EmployeeController;
use Modules\Employee\Http\Controllers\EmployeeQualificationController;
use Modules\Employee\Http\Controllers\ProfileController;

Route::group([
    'prefix' => 'employee',
    'middleware' => ['auth', 'can:isEmployee'],
], function () {
    Route::get('/', 'EmployeeController@index');
    Route::get('/jobapply',[EmployeeController::class , 'index'])->name('employee.jobapply.index');
    Route::delete('/jobdelete/{jobs}',[EmployeeController::class , 'destroy'])->name('employee.jobs.delete');
    Route::get('/profile',[ProfileController::class , 'index'])->name('employee.profile.index');
    Route::get('/profile/create',[ProfileController::class , 'create'])->name('employee.profile.create');
    Route::post('/profile/create',[ProfileController::class , 'store'])->name('employee.profile.store');
    Route::get('/profile/edit/{profile}', [ProfileController::class, 'edit'])->name('employee.profile.edit');
    Route::patch('/profile/edit/{profile}', [ProfileController::class, 'update'])->name('employee.profile.update');

    ////
    Route::get('/qualification',[EmployeeQualificationController::class , 'index'])->name('employee.qualification.index');
    Route::get('/qualification/create',[EmployeeQualificationController::class , 'create'])->name('employee.qualification.create');
    Route::post('/qualification/create',[EmployeeQualificationController::class , 'store'])->name('employee.qualification.store');
    Route::get('/qualification/edit/{employeeQualification}', [EmployeeQualificationController::class, 'edit'])->name('employee.qualification.edit');
    Route::patch('/qualification/edit/{employeeQualification}', [EmployeeQualificationController::class, 'update'])->name('employee.qualification.update');
});
