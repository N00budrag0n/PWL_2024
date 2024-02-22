<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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

// route 1
Route::get('/hello', function () {
    return 'Hello World';
});

// route 2
Route::get('/world', function () {
    return 'World';
});
   
// route selamat datang
Route::get('/', function () {
    return 'Selamat Datang';
});

Route::get('/about', function () {
    return 'Nama: Muhammad Helmi Permana Agung<br>NIM: 2141762140';
});