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

// BASIC ROUTING
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

// route about
Route::get('/about', function () {
    return 'Nama: Muhammad Helmi Permana Agung<br>NIM: 2141762140';
});

// ROUTE PARAMETERS
// route user
Route::get('/user/{name}', function ($name) {
    return 'Nama saya '.$name;
});

// route lebih dari 1 parameter
Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

// ID Artikel
Route::get('/articles/{id}', function ($id) {
    return 'Halaman Artikel dengan ID '.$id;
});

// OPTIONAL PARAMETER
// route optional user
Route::get('/user/{name?}', function ($name='John') {
   return 'Nama saya '.$name;
});