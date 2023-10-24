<?php

namespace App\Livewire\Partials;

use App\Models\Truyenthong;
use Livewire\Component;

class Header extends Component
{
    public $homeSlider;

    public function __construct()
    {
       $this->homeSlider = Truyenthong::where('group', 'trangChinh')->inRandomOrder()->limit(5)->first();
    }

    public function render()
    {
        return view('livewire.partials.header');
    }
}
