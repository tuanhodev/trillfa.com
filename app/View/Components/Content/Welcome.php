<?php

namespace App\View\Components\Content;

use Closure;
use App\Models\Truyenthong;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

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
