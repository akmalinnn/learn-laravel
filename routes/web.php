<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about',[
        "title" => "ini laman about",
        "name" => "Akmal Nafis",
        "born" => "Bangkalan, 25 Juli 2003",
        "email" => "akmalnafis@gmail.com",
        "status" => "menikahi anime"
    ]);;
});

Route::get('/task', function () {
    return view('pos', [
        "name" => "c akmal nafis",
        // "email" => "akmalnafi@gmail.com"

    ]);
});

Route::get('/learn', function () {
    
    return view('learn',[
        "title" => "ini laman learn home"
    ]);
});

$blog_post 

