<?php

namespace App\View\Components;

use App\Models\Blog\Tag;
use App\Models\Blog\Topic;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PostRightSide extends Component
{


    public $collection;
    public $topics;
    public $tags;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->topics     = Topic::with('children')->where('parent_id', null)->get();
        $this->collection = Topic::where('topic_type', 'collection')->get();
        $this->tags   = Tag::where('type', ['post', 'project'])->limit(20)->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.post-right-side');
    }
}
