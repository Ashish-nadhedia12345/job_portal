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
use Modules\AdminPanel\Http\Controllers\JobCategoryController;

Route::group([
    'prefix' => 'adminpanel',
    'middleware' => ['auth', 'can:isAdmin'],
], function () {
    Route::get('/', 'AdminPanelController@index');
    //Blog controller all routes
    //all category
    Route::get('/jobcategory', [JobCategoryController::class, 'index'])->name('admin.jobcategory.index');
    //create
    Route::get('/jobcategory/create', [JobCategoryController::class, 'create'])->name('admin.jobcategory.create');
    Route::post('/jobcategory/create', [JobCategoryController::class, 'store'])->name('admin.jobcategory.store');
    //edit
    Route::get('/jobcategory/edit/{jobCategory}', [JobCategoryController::class, 'edit'])->name('admin.jobcategory.edit');
    Route::patch('/jobcategory/edit/{jobCategory}', [JobCategoryController::class, 'update'])->name('admin.jobcategory.update');
    //delete
    Route::delete('/jobcategory/delete/{jobCategory}', [JobCategoryController::class, 'destroy'])->name('admin.jobcategory.delete');
});
