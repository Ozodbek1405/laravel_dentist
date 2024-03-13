<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
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

//about
Route::get('/about',[HomeController::class,'about'])->name('about.index');

//doctors
Route::get('/doctors',[DoctorController::class,'doctor'])->name('doctor.index');

//services
Route::get('/services',[ServiceController::class,'services'])->name('services.index');

//appointment
Route::get('/appointment',[ApplicationController::class,'appointment'])->name('appointment.index');


