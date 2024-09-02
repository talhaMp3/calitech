<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\ServiceController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('frontend.index');
})->name('user.home');

Route::get('404', function () {
    return view('frontend.404');
})->name('user.404');

Route::get('/about', function () {
    return view('frontend.about');
})->name('user.about');

Route::get('/service', function () {
    return view('frontend.service');
})->name('user.service');

Route::get('/contact', function () {
    return view('frontend.contact');
})->name('user.contact');

Route::get('/career-list', function () {
    return view('frontend.career-list');
})->name('user.careerList');
Route::get('/apply-now', function () {
    return view('frontend.apply-now');
})->name('user.applyNow');



Route::get('/service/{slug}', [ServiceController::class, 'serviceDetail'])->name('user.serviceDetail');