<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PhotoController;

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
Route::get('/hello', [HomeController::class, 'index']);

// route 2
Route::get('/world', function () {
    return 'World';
});
   
// route selamat datang
Route::get('/', function () {
    return 'Selamat Datang';
});

// route about
Route::get('/about', [AboutController::class, 'about']);

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
Route::get('/articles/{id}', [ArticleController::class, 'articles']);

// OPTIONAL PARAMETER
// route optional user
Route::get('/user/{name?}', function ($name='John') {
   return 'Nama saya '.$name;
});

// RESOURCE CONTROLLER
// Route::resource('photos', PhotoController::class);
Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
]);

Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
]);