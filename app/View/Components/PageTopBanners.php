<?php

namespace App\View\Components;

use App\Models\Truyenthong;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PageTopBanners extends Component
{

    public $banners;

    /**
     * Create a new component instance.
     */
    public function __construct($bannersGroup = 'banners-topic')
    {
        $this->banners = Truyenthong::where('group', $bannersGroup)
            ->first();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.page-top-banners');
    }
}
