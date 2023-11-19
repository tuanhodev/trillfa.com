<?php

use App\Http\Controllers\PageController;
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

// Bộ sưu tập
Route::get('/collections', function () {
    return view('home');
})->name('collections');

Route::get('/about', [PageController::class, 'about'])->name('about');

Route::prefix('blog')->name('blog.')->group(function () {

    Route::get('/', [PageController::class, 'blog'])->name('index');

    Route::get('/{topic:slug}/chuyen-muc', [PageController::class, 'topicPostList'])->name('topic.posts');

    Route::get('/{tag:slug}/tag', [PageController::class, 'tagPostList'])->name('tag.posts');

    Route::get('/blog/{post:slug}/bai-dang', [PageController::class, 'postView'])->name('post.view');

});

Route::post('search', [PageController::class, 'search'])->name('search');


