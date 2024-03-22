<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
// use App\Models\MenuDesign as Menu;
use App\Models\Blog\Topic;

class MainMenu extends Component
{

    // public $collection;
    public $topics;

    public function __construct()
    {

        $this->topics = Topic::with('children')
             ->where('parent_id', null)
             ->where('status', true)
             ->orderBy('ordering', 'ASC')
             ->get();

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.main-menu');
    }
}
