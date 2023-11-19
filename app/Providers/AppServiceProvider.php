<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use App\Observers\PostObserver;
use App\Models\Blog\Post;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind('path.public', function () {

            base_path() . 'public_html';
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

        Post::observe(PostObserver::class);

        Paginator::defaultView('atd-pagination');
    }
}
