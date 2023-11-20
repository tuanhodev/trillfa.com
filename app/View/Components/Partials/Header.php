<?php

namespace App\View\Components\Partials;

use Closure;
use Illuminate\Contracts\View\View;
use App\Models\Truyenthong;
use Illuminate\View\Component;

class Header extends Component
{

    public $homeSlider;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->homeSlider = Truyenthong::where('group', 'trangChinh')->inRandomOrder()->limit(6)->first();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.partials.header');
    }
}

