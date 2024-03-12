<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
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

//Voyager
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

//Language Translation
Route::get('index/{locale}', [HomeController::class, 'lang']);

//home
Route::get('/',[HomeController::class,'index'])->name('home.index');

//blog
Route::get('/blog',[BlogController::class,'index'])->name('blog.index');
Route::get('/blog-single/{blog_id}',[BlogController::class,'single'])->name('blog.single');

Route::get('/about', function () {
    return view('about.about');
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


