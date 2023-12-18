<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Create;
use App\Http\Controllers\Read;
use App\Http\Controllers\Update;
use App\Http\Controllers\Delete;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserCtrl;
use App\Http\Controllers\MahasiswaController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/create', [Create::class, 'Create']);
Route::get('/read', [Read::class, 'Read']);
Route::get('/update', [Update::class, 'Update']);
Route::get('/delete', [Delete::class, 'Delete']);

Route::get('/app', [UserController::class, 'view_form_user']);

Route::get('/products', [ProductController::class, 'index']);
Route::get('/user', [UserCtrl::class, 'index']);
Route::get('/index', [UserCtrl::class, 'indexuser']);


Route::get('/', [MahasiswaController::class, 'index'])->name('mahasiswa.index');;
Route::get('/create', [MahasiswaController::class, 'create'])->name('mahasiswa.create');

Route::resource('mahasiswa', MahasiswaController::class);