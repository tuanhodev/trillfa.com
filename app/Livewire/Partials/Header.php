<?php

namespace App\Livewire\Partials;

use App\Models\Truyenthong;
use Livewire\Component;

class Header extends Component
{
    public $homeSlider;

    public function __construct()
    {
       $this->homeSlider = Truyenthong::where('group', 'trangChinh')->orderBy('ordering', 'DESC')->first();
    }

    public function render()
    {
        return view('livewire.partials.header');
    }
}
