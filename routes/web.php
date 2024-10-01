<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\EmployeeController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/employee', [EmployeeController::class,'index'])->name('employee.index');

Route::get('/employee/create', [EmployeeController::class,'create'])->name('employee.create');

Route::post('/employee/store', [EmployeeController::class,'store'])->name('employee.store');

Route::get('/employee/edit/{id}', [EmployeeController::class,'edit'])->name('employee.edit');

Route::put('/employee/update/{id}', [EmployeeController::class,'update'])->name('employee.update');

Route::delete('/employee/delete/{id}', [EmployeeController::class,'destroy'])->name('employee.delete');

Route::get('/employee/details/{id}', [EmployeeController::class,'show'])->name('employee.show');

Route::get('/employee/search', [EmployeeController::class,'search'])->name('employee.search');

