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

//Route::get('/', function () {
//     return "Selamat Datang";
// });
// Route::get('/', function () {
//     echo "Selamat Datang";
// });
 Route::get('/about', function () {
     echo "2041720180 Anjani Dwilestari";
 });
// Route::get('/articles/{id}', function ($id) {
//     echo "Halaman Artikel dengan ID $id";
// });
// Route::get('/articles/1', function ($id=1) {
//     echo "Halaman Artikel dengan ID $id";
// });
// Route::get('/articles/2', function ($id=2) {
//     echo "Halaman Artikel dengan ID $id";
// });