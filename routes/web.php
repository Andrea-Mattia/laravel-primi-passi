<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// HOMEPAGE
Route::get('/home', function () {
    return view('home', ['title' => 'Andrea Mattia\'s Personal Site']);
})->name('home');

// ABOUT
Route::get('/about', function () {
    return view('about', ['title' => 'Andrea Mattia\'s Personal Site']);
})->name('about');

// CONTACTS
Route::get('/contacts', function () {
    return view('contacts', ['title' => 'Andrea Mattia\'s Personal Site']);
})->name('contacts');
