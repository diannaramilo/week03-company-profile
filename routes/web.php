<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;

/*
|--------------------------------------------------------------------------
| Web Routes - week03-company-profile
|--------------------------------------------------------------------------
| Each route below maps a URL to a method on CompanyController.
| Routes are named so links inside Blade views can use route('name')
| instead of hard-coded URLs.
*/

Route::get('/', [CompanyController::class, 'home'])->name('home');
Route::get('/about', [CompanyController::class, 'about'])->name('about');
Route::get('/services', [CompanyController::class, 'services'])->name('services');
Route::get('/contact', [CompanyController::class, 'contact'])->name('contact');
