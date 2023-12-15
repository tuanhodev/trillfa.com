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

Route::get('sitemap.xml', [PageController::class, 'sitemap'])->name('sitemap');
Route::get('sitemap.xml/posts', [PageController::class, 'sitemapPosts'])->name('sitemap.posts');
Route::get('sitemap.xml/page', [PageController::class, 'sitemapPage'])->name('sitemap.page');

Route::get('/about', [PageController::class, 'about'])->name('about');

Route::prefix('blog')->name('blog.')->group(function () {

    // Bộ sưu tập
    // Route::get('/collection', [PageController::class, 'collection'])->name('collection');

    // Chủ đề chính
    Route::get('/{topic:slug}/index', [PageController::class, 'chuDeChinh'])->name('chu-de-chinh');

    Route::get('/', [PageController::class, 'blog'])->name('index');

    Route::get('/{topic:slug}/chuyen-muc', [PageController::class, 'topicPostList'])->name('topic.posts');

    Route::get('/{tag:slug}/tag', [PageController::class, 'tagPostList'])->name('tag.posts');

    Route::get('/{post:slug}/view', [PageController::class, 'postView'])->name('post.view');
});

Route::post('search', [PageController::class, 'search'])->name('search');
