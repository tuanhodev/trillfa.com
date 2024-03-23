<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Tag;
use Closure;

class WidgetTag extends Component
{

    public $tags;
    public $tagTitle;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {

      $this->tags = Tag::where('type', 'post')->inRandomOrder()->limit(12)->get();

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.widget-tag');
    }

}
