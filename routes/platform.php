<?php

declare(strict_types=1);

use App\Orchid\Screens\Banners\TruyenthongListScreen;
use App\Orchid\Screens\Banners\TruyenthongEditScreen;
use App\Orchid\Screens\MenuDesign\MenuListScreen;
use App\Orchid\Screens\User\UserProfileScreen;
use App\Orchid\Screens\Blog\SettingListScreen;
use App\Orchid\Screens\Blog\PostEditScreen;
use App\Orchid\Screens\Blog\PostListScreen;
use App\Orchid\Screens\Role\RoleEditScreen;
use App\Orchid\Screens\Role\RoleListScreen;
use App\Orchid\Screens\User\UserEditScreen;
use App\Orchid\Screens\User\UserListScreen;
use App\Orchid\Screens\Blog\TopicListScreen;
use App\Orchid\Screens\Blog\TagListScreen;
use App\Orchid\Screens\CommentListScreen;
use App\Orchid\Screens\PlatformScreen;
use Illuminate\Support\Facades\Route;
use Tabuna\Breadcrumbs\Trail;

/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the need "dashboard" middleware group. Now create something great!
|
*/


// Post
Route::screen('/posts', PostListScreen::class)
    ->name('blog.posts')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->push(__('Posts'), route('blog.posts')));

Route::screen('/posts/{post}/edit', PostEditScreen::class)
    ->name('blog.posts.edit')
    ->breadcrumbs(fn (Trail $trail, $post) => $trail
        ->parent('blog.posts')
        ->push(__($post->title), route('blog.posts.edit', $post)));

Route::screen('/posts/create', PostEditScreen::class)
    ->name('blog.posts.create')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('blog.posts')
        ->push(__('Post create'), route('blog.posts.create')));

// Tag
Route::screen('/tags', TagListScreen::class)
    ->name('blog.tags')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->push(__('Tags'), route('blog.tags')));

// Topics
Route::screen('/topics', TopicListScreen::class)
    ->name('blog.topics')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->push(__('Topics'), route('blog.topics')));

// MenuDesign
Route::screen('/menus', MenuListScreen::class)
    ->name('menus')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->push(__('Menus'), route('menus')));

// Comment
Route::screen('/comments', CommentListScreen::class)
    ->name('comments')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.index')
        ->push(__('Comments'), route('comments')));

// settings
Route::screen('/settings', SettingListScreen::class)
    ->name('atd.settings')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.index')
        ->push(__('Setting'), route('atd.settings')));

// Truyenthongs
Route::screen('/truyenthong', TruyenthongListScreen::class)
    ->name('truyenthong')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.index')
        ->push(__('Truyền thông'), route('truyenthong')));

Route::screen('/truyenthong/{truyenthong}/edit', TruyenthongEditScreen::class)
    ->name('truyenthong.edit')
    ->breadcrumbs(fn (Trail $trail, $truyenthong) => $trail
        ->parent('truyenthong')
        ->push(__($truyenthong->title), route('truyenthong.edit', $truyenthong)));

Route::screen('/truyenthong/create', TruyenthongEditScreen::class)
    ->name('truyenthong.create')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('truyenthong')
        ->push(__('Thêm banners'), route('truyenthong.create')));

// Main
Route::screen('/main', PlatformScreen::class)
    ->name('platform.main');

// Platform > Profile
Route::screen('profile', UserProfileScreen::class)
    ->name('platform.profile')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.index')
        ->push(__('Profile'), route('platform.profile')));

// Platform > System > Users > User
Route::screen('users/{user}/edit', UserEditScreen::class)
    ->name('platform.systems.users.edit')
    ->breadcrumbs(fn (Trail $trail, $user) => $trail
        ->parent('platform.systems.users')
        ->push($user->name, route('platform.systems.users.edit', $user)));

// Platform > System > Users > Create
Route::screen('users/create', UserEditScreen::class)
    ->name('platform.systems.users.create')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.systems.users')
        ->push(__('Create'), route('platform.systems.users.create')));

// Platform > System > Users
Route::screen('users', UserListScreen::class)
    ->name('platform.systems.users')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.index')
        ->push(__('Users'), route('platform.systems.users')));

// Platform > System > Roles > Role
Route::screen('roles/{role}/edit', RoleEditScreen::class)
    ->name('platform.systems.roles.edit')
    ->breadcrumbs(fn (Trail $trail, $role) => $trail
        ->parent('platform.systems.roles')
        ->push($role->name, route('platform.systems.roles.edit', $role)));

// Platform > System > Roles > Create
Route::screen('roles/create', RoleEditScreen::class)
    ->name('platform.systems.roles.create')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.systems.roles')
        ->push(__('Create'), route('platform.systems.roles.create')));

// Platform > System > Roles
Route::screen('roles', RoleListScreen::class)
    ->name('platform.systems.roles')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.index')
        ->push(__('Roles'), route('platform.systems.roles')));
