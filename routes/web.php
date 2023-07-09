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

Route::redirect('/', '/anasayfa');
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

Route::get('/sign_up', function () {

    return view('layouts.sign_up');
})->name('sign_up');

Route::get('/anasayfa1', function () {

    return view('librarian.anasayfa1');
})->name('anasayfa1');

Route::get('/kitapislemleri', function () {

    return view('librarian.kitap_islemleri');
})->name('kitap_islemleri');

Route::get('/uyeislemleri', function () {

    return view('librarian.uye_islemleri');
})->name('uye_islemleri');

Route::get('/emanet_kitap_islemleri', function () {

    return view('librarian.emanet_kitap_islemleri');
})->name('emanet_kitap_islemleri');

Route::get('/anasayfa2', function () {

    return view('student.anasayfa2');
})->name('anasayfa2');

Route::get('/kitaparama', function () {

    return view('student.kitap_arama');
})->name('kitap_arama');

Route::get('/kitapkiralama', function () {

    return view('student.kitap_kiralama');
})->name('kitap_kiralama');
