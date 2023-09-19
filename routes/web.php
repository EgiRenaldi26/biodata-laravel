<?php

use App\Http\Controllers\GuruR;
use App\Http\Controllers\PesertadidikPDF;
use App\Http\Controllers\PesertadidikR;
use App\Http\Controllers\UserC;
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
    return view('dashboard');
})->middleware('auth');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

// menampilkan halaman login dan register
Route::get('register', [UserC::class,'register'])->name('register');
Route::get('login', [UserC::class,'login'])->name('login');

Route::post('register', [UserC::class,'register_action'])->name('register.action');
Route::post('login', [UserC::class,'login_action'])->name('login.action');

Route::get('logout', [UserC::class,'logout'])->name('logout');


// Route::get('pdf', [PesertadidikPDF::class,'pdf']);

Route::get('pesertadidik/pdf', [PesertadidikR::class,'pdf'])->middleware('auth');
Route::resource('pesertadidik', PesertadidikR::class)->middleware('auth');
Route::resource('guru',GuruR::class)->middleware('auth');
