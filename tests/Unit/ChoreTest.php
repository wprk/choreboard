<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class ChoreTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function it_has_a_household()
    {
        $chore = factory('App\Chore')->create();

        $this->assertInstanceOf('App\Household', $chore->household);
    }
}
