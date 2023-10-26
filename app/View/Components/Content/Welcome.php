<?php

namespace App\View\Components\Content;

use App\Models\Blog\Post;
use App\Models\Truyenthong;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Welcome extends Component
{

    public $featured;

    public $postFeatured;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->featured = Truyenthong::where('group', 'featured')->limit(3)->get();

        $this->postFeatured = Post::where('status', true)->orderBy('id', 'desc')->limit(12)->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.content.welcome');
    }
}
