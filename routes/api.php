<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;


Route::resource('customer',App\Http\Controllers\CustomerController::class);

Route::get('visualizecustomer', [\App\Http\Controllers\CustomerController::class, 'index'])->name('api-getAll');
Route::delete('deletecustomer/{id}', [\App\Http\Controllers\CustomerController::class, 'deleteCustomer'])->name('api-delete');
Route::put('savecustomer', [App\Http\Controllers\CustomerController::class, 'store'])->name('api-saveCustomer');
Route::post('editcustomer/{id}', [App\Http\Controllers\CustomerController::class, 'editCustomer'])->name('api-editCustomer');



