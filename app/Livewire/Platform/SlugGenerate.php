<?php

namespace App\Livewire\Platform;

use Livewire\Component;

class SlugGenerate extends Component
{
    public $name;

    public function render()
    {
        return view('livewire..platform.slug-generate');
    }
}
