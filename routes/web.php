<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;

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


Route::get('/anasayfa', [BooksController::class , 'read'])->name('anasayfa');

Route::get('/communication', function () {

    return view('layouts.communication');
})->name('communication');


Route::get('/comments', function () {

    return view('layouts.comments');
})->name('comments');

Route::get('/login', function () {

    return view('layouts.log_in');
})->name('giris');


