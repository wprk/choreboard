<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class ChoresTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function a_user_can_view_all_chores()
    {
        $chore = factory('App\Chore')->create();

        $response = $this->get('/chores');
        $response->assertSee($chore->name);
    }

    /** @test */
    public function a_user_can_view_a single_chore()
    {
        $chore = factory('App\Chore')->create();

        $response = $this->get('/chores/' . $chore->id);
        $response->assertSee($chore->name);
    }
}
