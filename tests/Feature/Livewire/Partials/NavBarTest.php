<?php

namespace Tests\Feature\Livewire\Partials;

use App\Livewire\Partials\NavBar;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class NavBarTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(NavBar::class)
            ->assertStatus(200);
    }
}
