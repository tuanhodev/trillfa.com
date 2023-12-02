<?php

namespace App\View\Components\Platform\Blog;

use App\Models\Blog\Topic;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class RenderParentTopic extends Component
{

    public $topic;

    /**
     * Create a new component instance.
     */
    public function __construct(Topic $topic)
    {

        $this->topic = $topic;

    }

    public function renderParentTopic()
    {

        if($this->topic->parent_id == null) {

            return 'root';

        }else {

            $parent = Topic::where('id', $this->topic->parent_id)->where('status', 1)->first();

            return $parent->name ?? '';


        }


    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components..platform.blog.render-parent-topic');
    }
}
