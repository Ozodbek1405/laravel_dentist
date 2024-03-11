<?php

use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about.about');
});
Route::get('/blog', function () {
    return view('blog.blog');
});
Route::get('/blog-single', function () {
    return view('blog.blog-single');
});
Route::get('/contact', function () {
    return view('contact.contact');
});
Route::get('/doctors', function () {
    return view('doctors.doctors');
});
Route::get('/services', function () {
    return view('services.services');
});
Route::get('/appointment', function () {
    return view('appointment.appointment');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});