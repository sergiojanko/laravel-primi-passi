<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\VarDumper\Cloner\Data;

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


    $data = [
        'name' => 'Sergio',
        'last_name' => 'Janko'
    ];

    return view('home', $data);
})->name('home');


Route::get('/about', function () {
    return view('about');
})->name('about');


Route::get('/blog', function () {
    return view('blog');
})->name('blog');
