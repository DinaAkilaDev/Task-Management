<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\AdminController;
use \App\Http\Controllers\TeamLeaderController;
use \App\Http\Controllers\MemberController;
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
    Route::get('/admin/add-employer', [AdminController::class, 'createEmployer'])->name('employerCreate');
    Route::post('/admin/add-employer', [AdminController::class, 'storeEmployer'])->name('employerStore');
    Route::get('/admin/delete-employer/{id}', [AdminController::class, 'destroyEmployer']);
    Route::get('/admin/edit-employer/{id}', [AdminController::class, 'editEmployer']);
    Route::post('/admin/edit-employer', [AdminController::class, 'updateEmployer'])->name('employerUpdate');
    Route::get('/admin/show-employer_report/{id}', [AdminController::class, 'reportEmployer']);

    Route::get('/admin/project', [AdminController::class, 'project']);
    Route::get('/admin/add-project', [AdminController::class, 'createProject'])->name('projectCreate');
    Route::post('/admin/add-project', [AdminController::class, 'storeProject'])->name('projectStore');
    Route::get('/admin/delete-project/{id}', [AdminController::class, 'destroyProject']);
    Route::get('/admin/edit-project/{id}', [AdminController::class, 'editProject']);
    Route::post('/admin/edit-project', [AdminController::class, 'updateProject'])->name('projectUpdate');

    Route::get('/admin/task', [AdminController::class, 'task']);

    Route::get('/admin/profile', [AdminController::class, 'profile'])->name('adminProfile');
    Route::post('/admin/edit-profile', [AdminController::class, 'updateProfile'])->name('profileUpdate');


    Route::get('/teamleader/dashboard', [TeamLeaderController::class, 'index']);

    Route::get('/teamleader/employer', [TeamLeaderController::class, 'employer']);
    Route::get('/teamleader/delete-employer/{id}', [TeamLeaderController::class, 'destroyEmployer']);
    Route::get('/teamleader/show-employer_report', [TeamLeaderController::class, 'reportEmployer']);

    Route::get('/teamleader/project', [TeamLeaderController::class, 'project']);
    Route::get('/teamleader/delete-project/{id}', [TeamLeaderController::class, 'destroyProject']);
    Route::get('/teamleader/edit-project/{id}', [TeamLeaderController::class, 'editProject']);
    Route::post('/teamleader/edit-project', [TeamLeaderController::class, 'updateProject'])->name('leaderprojectUpdate');


    Route::get('/teamleader/task', [TeamLeaderController::class, 'task']);
    Route::get('/teamleader/add-task', [TeamLeaderController::class, 'createTask']);
    Route::post('/teamleader/add-task', [TeamLeaderController::class, 'storeTask'])->name('taskStore');
    Route::get('/teamleader/edit-task/{id}', [TeamLeaderController::class, 'editTask']);
    Route::post('/teamleader/edit-task', [TeamLeaderController::class, 'updateTask'])->name('taskUpdate');
    Route::get('/teamleader/delete-task/{id}', [TeamLeaderController::class, 'destroyTask']);

    Route::get('/teamleader/profile', [TeamLeaderController::class, 'profile'])->name('teamleaderProfile');
    Route::post('/teamleader/edit-profile', [TeamLeaderController::class, 'updateProfile'])->name('teamleaderUpdate');



    Route::get('/member/dashboard', [MemberController::class, 'index']);
    Route::get('/member/project', [MemberController::class, 'project']);
    Route::get('/member/task', [MemberController::class, 'task']);
//    Route::get('/member/add-task', [MemberController::class, 'createTask']);
//    Route::post('/member/add-task', [MemberController::class, 'storeTask'])->name('membertaskStore');
    Route::get('/member/edit-task/{id}', [MemberController::class, 'editTask']);
    Route::post('/member/edit-task', [MemberController::class, 'updateTask'])->name('membertaskUpdate');
    Route::get('/member/delete-task/{id}', [MemberController::class, 'destroyTask']);
    Route::get('/teamleader/show-related_task/{id}', [MemberController::class, 'relatedTask']);

    Route::get('/member/profile', [MemberController::class, 'profile'])->name('memberProfile');
    Route::post('/member/edit-profile', [MemberController::class, 'updateProfile'])->name('memberUpdate');

});


