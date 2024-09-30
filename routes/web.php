<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\EmployeeController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/employee', [EmployeeController::class,'index'])->name('employee.index');

