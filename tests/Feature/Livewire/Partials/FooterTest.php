<?php

namespace Tests\Feature\Livewire\Partials;

use App\Livewire\Partials\Footer;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class FooterTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(Footer::class)
            ->assertStatus(200);
    }
}
