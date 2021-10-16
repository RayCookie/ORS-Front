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

Route::get('/nav', function () {
    return view('nav');
});

Route::get('/biblio', function () {
    return view('Biblio');
});
Route::get('/contactus', function () {
    return view('Contactus');
});
Route::get('/contactus2', function () {
    return view('Contactus2');
});
Route::get('/checkout', function () {
    return view('Checkout');
});
Route::get('/aboutus', function () {
    return view('AboutUs');
});
Route::get('/', function () {
    return view('Acceuil');
});

Route::get('/events', function () {
    return view('events');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/connexion', function () {
    return view('Login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
