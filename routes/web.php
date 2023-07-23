<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\PermissionsController;

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

Route::get('/', [HomeController::class, 'dashboard']);

Route::get('departments/index', [DepartmentController::class, 'index'])->name('departmentsIndex');

Route::get('users/index', [UserController::class, 'index'])->name('usersIndex');

Route::get('permissions/index', [PermissionsController::class, 'index'])->name('permissionsIndex');

Route::get('roles/index', [RolesController::class, 'index'])->name('rolesIndex');

////Route::get('/', function () {
////    return view('dashboard');
////});
//
////Route::get('departments/index', function () {
////    return view('management.departments.index');
////})->name('departmentsIndex');
////
////Route::get('users/index', function () {
////    return view('management.users.index');
////})->name('usersIndex');
//
//Route::get('roles/index', function () {
//    return view('management.roles.index');
//})->name('rolesIndex');
//
//Route::get('permissions/index', function () {
//    return view('management.permissions.index');
//})->name('permissionsIndex');
