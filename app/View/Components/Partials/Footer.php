<?php

namespace App\View\Components\Partials;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\MenuDesign;

class Footer extends Component
{

    public $menus;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->menus = MenuDesign::orderBy('ordering', 'ASC')->limit(10)->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.partials.footer');
    }
}
