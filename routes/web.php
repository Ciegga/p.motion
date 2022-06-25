<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ApplicationController;


Route::get('/', function () {
    return view('user.home');
})->name('index');

Route::get('/account', function() {
    return view('user.account');
})->name('account');

Route::get('/login', function() {
    return view('user.login');
})->name('login');

Route::get('/register', function() {
    return view('user.register');
})->name('register');

Route::get('/requests/all', [ApplicationController::class, 'allRequests'])->name('requests.all');
Route::get('/requests/create', [ApplicationController::class, 'create'])->name('requests.create');
Route::get('/admin',[ApplicationController::class,'admin'])->name('admin');


Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/requests/create', [ApplicationController::class, 'createApplication']);
Route::post('/update/{id}',[ApplicationController::class, 'update'])->name('application.update');
Route::post('/delete/{id}', [ApplicationController::class, 'delete'])->name('application.delete');
