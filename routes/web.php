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
    return view('home');
})->name('home');

Route::get('/blog', function () {
    return view('home');
})->name('blog.index');

Route::get('/collections', function () {
    return view('home');
})->name('collections');

Route::get('/about', function () {
    return view('home');
})->name('about');

Route::prefix('blog/topic')->name('blog.')->group(function () {

    Route::get('/', function () {
        return view('home');
    })->name('blog.topic');

    Route::get('/{topic:slug}', function () {
        return view('home');
    })->name('topic.posts');

    Route::get('/{tag:slug}', function () {
        return view('home');
    })->name('tag.posts');

});



