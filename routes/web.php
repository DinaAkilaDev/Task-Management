<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\AdminController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/admin/dashboard', [AdminController::class, 'index']);
    Route::get('/admin/employer', [AdminController::class, 'employer']);
    Route::get('/admin/project', [AdminController::class, 'project']);
    Route::get('/admin/task', [AdminController::class, 'task']);

    Route::get('/admin/add-employer', [AdminController::class, 'createEmployer'])->name('employerCreate');
    Route::post('/admin/add-employer', [AdminController::class, 'storeEmployer'])->name('employerStore');

    Route::get('/admin/add-project', [AdminController::class, 'createProject'])->name('projectCreate');
    Route::post('/admin/add-project', [AdminController::class, 'storeProject'])->name('projectStore');


    Route::get('/admin/add-task', [AdminController::class, 'createTask'])->name('taskCreate');
    Route::post('/admin/add-task', [AdminController::class, 'storeTask'])->name('taskStore');
//    Route::get('/admin/delete-user/{id}', [AdminController::class, 'destroy']);
//    Route::get('/admin/restore-user/{id}', [AdminController::class, 'restore']);
//    Route::get('/admin/edit-user/{id}', [AdminController::class, 'edit']);
//    Route::post('/admin/edit-user', [AdminController::class, 'update'])->name('userUpdate');
    Route::get('/admin/profile', [AdminController::class, 'profile'])->name('adminProfile');
});


