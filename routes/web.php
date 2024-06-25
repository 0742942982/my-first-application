<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RecreationController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\RegisterController;
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
    return view('home');
});

//register route


//home routes
Route::get('home', [HomeController::class, 'index'])->name('home');
Route::get('header', [HomeController::class, 'Header'])->name('header');
Route::get('footer', [HomeController::class, 'Footer'])->name('footer');


//users routes
Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/register_check', [UserController::class, 'register_check'])->name('register_check');
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login_check', [UserController::class, 'login_check'])->name('login_check');
Route::get('/u_dashboard', [UserController::class, 'dashboard'])->name('u_dashboard');

//admin routes

 Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
 Route::resource('admin/recreations', RecreationController::class);
//  Route::get('/admin/recreations/create', [RecreationController::class, 'create'])->name('recreations.create');
//  Route::post('/admin/recreations', [RecreationController::class, 'store'])->name('recreations.store');
//  Route::get('/recreations', [RecreationController::class, 'index'])->name('recreations.index');
