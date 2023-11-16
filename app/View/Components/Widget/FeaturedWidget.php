<?php

namespace App\View\Components\Widget;

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
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.widget.featured-widget');
    }
}
