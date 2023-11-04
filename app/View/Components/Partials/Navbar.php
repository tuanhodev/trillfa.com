<?php

namespace App\View\Components\Partials;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\MenuDesign as Menu;
use App\Models\Blog\Topic;

class Navbar extends Component
{

    public $menus;

    public $topics;

    public function __construct()
    {

        $this->menus = Menu::orderBy('ordering', 'ASC')->limit(10)->get();

        $this->topics = Topic::with('children')->where('parent_id', null)->get();

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.partials.navbar');
    }
}
