<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\CustomerController;


Route::get('/', [AuthController::class, 'showLogin']);
Route::get('/register', [CustomerController::class, 'create'])->name('register');
Route::post('/register', [CustomerController::class, 'store']);
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/admin/dashboard', [BerandaController::class, 'admin'])->name('admin.dashboard');
Route::get('/customer/home', [BerandaController::class, 'customer'])->name('customer.home');
Route::get('/home', [HomeController::class, 'index'])->name('home');

