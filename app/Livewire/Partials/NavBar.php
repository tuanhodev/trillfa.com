<?php

namespace App\Livewire\Partials;

use App\Models\MenuDesign as Menu;
use App\Models\Blog\Topic;
use Livewire\Component;

class NavBar extends Component
{
    public $menus;

    public $topics;

    public $show = false;

    public function __construct()
    {

        $this->menus = Menu::all();

        $this->topics = Topic::with('children')->where('parent_id', null)->get();

    }

    public function toggleShow() {

        $this->show = !$this->show;
    }

    public function render()
    {
        return view('livewire.partials.nav-bar');
    }
}
