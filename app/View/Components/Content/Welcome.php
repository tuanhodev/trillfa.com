<?php

namespace App\View\Components\Content;

use Closure;
use App\Models\Blog\Topic;
use App\Models\Truyenthong;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Welcome extends Component
{
    public $welcomeFeatured;

    public $thoitrangTopic;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->welcomeFeatured = Truyenthong::where('group', 'featured')->limit(3)->get();
        $this->thoitrangTopic = Topic::where('slug', 'thoi-trang-va-cuoc-song')->first();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.content.welcome');
    }
}
