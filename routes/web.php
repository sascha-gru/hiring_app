<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;


// Routen für das Loginformular User
Route::get('/', function () {
    return view('login');
})->name('login');

Route::post('/login', function () {
    return redirect('/home');
})->name('login');

Route::get('/home', function () {
    return view('home');
})->name('home');



// Routen für das Einstellungsformular Job
Route::get('/jobs/create', [JobController::class, 'create'])->name('jobs.create');
Route::post('/jobs', [JobController::class, 'store'])->name('jobs.store');

// Routen für die Listen- und Detailansicht Job
Route::get('/jobs', [JobController::class, 'index'])->name('jobs.index');
Route::get('/jobs/{id}', [JobController::class, 'detail'])->name('jobs.detail');

// Routen für das Bearbeitungsformular Job
Route::get('/jobs/{id}/edit', [JobController::class, 'edit'])->name('jobs.edit');
Route::put('/jobs/{id}/update', [JobController::class, 'update'])->name('jobs.update');



// Routen für das Einstellungsformular Company
Route::get('/companies/create', [CompanyController::class, 'create'])->name('companies.create');
Route::post('/companies', [CompanyController::class, 'store'])->name('companies.store');

// Routen für die Listen- und Detailansicht Company
Route::get('/companies', [CompanyController::class, 'index'])->name('companies.index');
Route::get('/companies/{id}', [CompanyController::class, 'detail'])->name('companies.detail');

// Routen für das Bearbeitungsformular Company
Route::get('/companies/{id}/edit', [CompanyController::class, 'edit'])->name('companies.edit');
Route::put('/companies/{id}/update', [CompanyController::class, 'update'])->name('companies.update');



// Routen für das Einstellungsformular Category
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');

// Routen für die Listen- und Detailansicht Category
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/{id}', [CategoryController::class, 'detail'])->name('categories.detail');

// Routen für das Bearbeitungsformular Category
Route::get('/categories/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
Route::put('/categories/{id}/update', [CategoryController::class, 'update'])->name('categories.update');



// Routen für das Einstellungsformular User
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users', [UserController::class, 'store'])->name('users.store');

// Routen für die Listen- und Detailansicht User
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/{id}', [UserController::class, 'detail'])->name('users.detail');

// Routen für das Bearbeitungsformular User
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('/users/{id}/update', [UserController::class, 'update'])->name('users.update');