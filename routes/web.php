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

// Route::get('/', function () {
//     return 'SELAMAT DATANG';
// });
// Route::get('/home', function () {
//     return view('welcome');
// });
 // Route::get('/home', function () {
//     return view('welcome');
// });
// Route::get('/', [PageController::class, 'index']);

// Route::get('/about', [PageController::class, 'about']);

// Route::get('/articles/{id}', [PageController::class, 'articles']);

// Route::get('/', [HomeController::class, 'index']);

// Route::get('/about', [AboutController::class, 'index']);

// Route::get('/articles/{id}', [ArticleController::class, 'index']);


// // Route::resource('posts', PostController::class);

// Route::get('/', function () {
//     return 'SELAMAT DATANG';
// });

// Route::get('/about', function () {
//     return 'NIM: 2241727001 <br> Nama: Agustin dwi nur hamidah <br> Kelas: Web-B';
// });

Route::get('/articles/{id}', function ($id) {
    return 'Halaman artikel ini dengan id '.$id;
});