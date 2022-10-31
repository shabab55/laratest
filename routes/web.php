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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/collection-page', function () {
    return view('collection');
})->name('collection');

Route::get('/about-page', function () {
    return view('about');
})->name('about');

Route::get('/services-page', function () {
    return view('services');
})->name('services');

Route::get('/blog-page', function () {
    return view('blog');
})->name('blog');

Route::get('/contact-page', function () {
    return view('contact');
})->name('contact');
