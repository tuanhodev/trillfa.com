<?php

namespace App\View\Components;

use App\Models\Blog\Topic;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PostRightSide extends Component
{


    public $topics;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->topics = Topic::with('children')->where('parent_id', null)->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.post-right-side');
    }
}
