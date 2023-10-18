<?php

namespace App\Livewire\Partials;

use Livewire\Component;
use App\Models\MenuDesign as Menu;

class NavBar extends Component
{
    public $menus;

    public function __construct()
    {

        $this->menus = Menu::all();

    }

    public function render()
    {
        return view('livewire.partials.nav-bar');
    }
}
