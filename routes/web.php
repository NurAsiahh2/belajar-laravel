<?php

use App\Http\controllers\attendanceController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/store', [App\Http\Controllers\AttendanceController::class, 'store'])->name('store');
Route::get('/edit/{id}', [App\Http\Controllers\AttendanceController::class, 'edit'])->name('attendance.edit');
Route::post('/update/{id}', [App\Http\Controllers\AttendanceController::class, 'update'])->name('attendance.update');
Route::delete('/delete/{id}', [App\Http\Controllers\AttendanceController::class, 'destroy'])->name('attendance.destroy');