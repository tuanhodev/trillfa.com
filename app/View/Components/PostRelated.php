<?php

namespace App\View\Components;

use App\Models\Blog\Post;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PostRelated extends Component
{

    public $posts;

    /**
     * Create a new component instance.
     */
    public function __construct($post)
    {
        $topic = $post->topics;

        $topicId = collect();

        foreach($topic as $item) {
            $topicId = $topicId->push($item->id);
        }

        $this->posts = Post::whereHas('topics', function ($query) use ($topicId) {

            $query->whereIn('topic_id', $topicId);

        })->limit(30)->get();

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.post-related');
    }
}
