<?php

namespace App\View\Components\Partials;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\MenuDesign as Menu;

class Footer extends Component
{

    public $menus;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $leftSideMenu = Menu::where('slug', 'menu-left-side')->first();

        $this->menus = $leftSideMenu->childrent()->orderBy('ordering', 'ASC')->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.partials.footer');
    }
}
