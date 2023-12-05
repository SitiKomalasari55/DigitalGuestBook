<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Create;
use App\Http\Controllers\Read;
use App\Http\Controllers\Update;
use App\Http\Controllers\Delete;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserCtrl;
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

Route::get('/create', [Create::class, 'Create']);
Route::get('/read', [Read::class, 'Read']);
Route::get('/update', [Update::class, 'Update']);
Route::get('/delete', [Delete::class, 'Delete']);

Route::get('/app', [UsersController::class, 'view_form_user']);

Route::get('/products', [ProductController::class, 'index']);
Route::get('/user', [UserCtrl::class, 'index']);
