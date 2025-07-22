<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\BlogController;

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/service', function () {
    return view('service');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/larungan', function () {
    return view('larungan');
});

Route::get('/reog', function () {
    return view('reog');
});

Route::get('/balap', function () {
    return view('balap');
});

Route::get('/garebo', function () {
    return view('gasebo');
});

Route::get('/kuliner', function () {
    return view('kuliner');
});
Route::get('/pusat', function () {
    return view('pusat_oleh');
});
Route::post('/tickets', [TicketController::class, 'store']);
Route::get('/blog', [BlogController::class, 'index'])->name('blog');