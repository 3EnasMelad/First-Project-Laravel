<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\FormController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::middleware(['auth'])->get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', function () {
    return view('Home2');
});







// second task


Route::middleware(['auth'])->get('/home', [CustomerController::class, 'index'])->name('customers.index');
Route::delete('/customers/{id}', [CustomerController::class, 'destroy'])->name('customers.destroy');
Route::get('/customers/{id}/edit', [CustomerController::class, 'edit'])->name('customers.edit');
Route::put('/customers/{id}', [CustomerController::class, 'update'])->name('customers.update');




//third taskkk

//  creating 
Route::middleware(['auth'])->get('/forms/create', [FormController::class, 'create'])->name('forms.create');

// Store the form
Route::middleware(['auth'])->post('/forms/store', [FormController::class, 'store'])->name('forms.store');

Route::get('/forms', [FormController::class, 'index'])->name('forms.index');

Route::middleware(['auth'])->get('/forms/{formId}/fill', [FormController::class, 'fill'])->name('forms.fill');


Route::middleware(['auth'])->post('/forms/{formId}/submit', [FormController::class, 'submit'])->name('forms.submit');


Route::middleware(['auth'])->delete('/forms/{form}', [FormController::class, 'destroy'])->name('forms.destroy');









// =================================

// Route::middleware(['auth'])->get('/forms/create', [FormController::class, 'create'])->name('forms.create');


// Route::post('/forms/store', [FormController::class, 'store'])->name('forms.store');


// Route::get('/forms', [FormController::class, 'index'])->name('forms.index');
// Route::get('/forms/{formId}/fill', [FormController::class, 'fill'])->name('forms.fill');
// Route::post('/forms/{formId}/submit', [FormController::class, 'submit'])->name('forms.submit');
// // routes/web.php
// Route::delete('/forms/{form}', [FormController::class, 'destroy'])->name('forms.destroy');
