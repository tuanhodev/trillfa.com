<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use Tabuna\Breadcrumbs\Trail;

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

Route::get('/', fn () => view('home'))->name('home')
    ->breadcrumbs(fn (Trail $trail) => $trail->push('Trang chính', route('home')));

Route::get('sitemap.xml', [PageController::class, 'sitemap'])->name('sitemap');
Route::get('sitemap.xml/posts', [PageController::class, 'sitemapPosts'])->name('sitemap.posts');
Route::get('sitemap.xml/page', [PageController::class, 'sitemapPage'])->name('sitemap.page');

Route::get('/about', [PageController::class, 'about'])->name('about');

Route::prefix('blog')->name('blog.')->group(function () {

    // Bộ sưu tập
    // Route::get('/collection', [PageController::class, 'collection'])->name('collection');

    // Chủ đề chính
    Route::get('/{topic:slug}/index', [PageController::class, 'chuDeChinh'])
        ->name('chu-de-chinh')
        ->breadcrumbs(fn (Trail $trail, $topic) => $trail
            ->parent('home')
            ->push(__($topic->name), route('blog.chu-de-chinh', $topic)));

    Route::get('/', [PageController::class, 'blog'])->name('index')
        ->breadcrumbs(fn (Trail $trail) => $trail->parent('home')->push('Blog', route('blog.index')));

    Route::get('/{topic:slug}/chuyen-muc', [PageController::class, 'topicPostList'])->name('topic.posts');

    Route::get('/{tag:slug}/tag', [PageController::class, 'tagPostList'])->name('tag.posts');

    Route::get('/{post:slug}/view', [PageController::class, 'postView'])
        ->name('post.view')
        ->breadcrumbs(fn (Trail $trail, $post) => $trail
            ->parent('blog.index')
            ->push(__($post->title), route('blog.post.view', $post)));

});

Route::post('search', [PageController::class, 'search'])->name('search');
