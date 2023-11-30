<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;


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
})-> name('home');

Route::get('pendataan', function() {
    return view('pendataan');
})->name('pendataan');

Route::get('/data/{nama}', [TestController::class,'datanama'])->name('data-nama');

Route::get('/daftar', [TestController::class,
'daftar'])->name('daftar');

Route::post('/kirim', [TestController::class,
'kirim'])->name('kirim');

