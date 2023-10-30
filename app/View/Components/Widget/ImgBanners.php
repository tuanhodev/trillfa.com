<?php

namespace App\View\Components\Widget;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Truyenthong;
use Closure;

class ImgBanners extends Component
{

    public $banners;

    /**
     * Create a new component instance.
     */
    public function __construct($truyenthongGroup = 'home-banners-1')
    {
        if ($truyenthongGroup) {

            $banners = Truyenthong::where('group', $truyenthongGroup)->first();

            $this->banners = $banners;
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.widget.img-banners');
    }
}
