<?php

namespace App\View\Components\Widget;

use App\Models\Blog\Post;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FeaturedWidget extends Component
{

    public $currentPost;

    public $posts;


    /**
     * Create a new component instance.
     */
    public function __construct($postType = 'post')
    {

        $this->posts = Post::where('status', true)
        ->where('post_type', $postType)
        ->orderBy('id', 'desc')->limit(12)->get();

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.widget.featured-widget');
    }
}
