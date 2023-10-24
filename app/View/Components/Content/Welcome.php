<?php

namespace App\View\Components\Content;

use App\Models\Truyenthong;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Welcome extends Component
{

    public $featured;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->featured = Truyenthong::where('group', 'featured')->limit(3)->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.content.welcome');
    }
}
