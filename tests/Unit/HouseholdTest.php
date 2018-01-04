<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class HouseholdTest extends TestCase
{
    use DatabaseMigrations;

    protected $household;

    public function setUp()
    {
        parent::setUp();

        $this->household = factory('App\Household')->create();
    }

    /** @test */
    public function a_household_has_chores()
    {
        $this->assertInstanceOf('Illuminate\Database\Eloquent\Collection', $this->household->chores);
    }

    /** @test */
    public function a_household_can_have_chores_created()
    {
        $this->household->addChore([
            'name' => 'A Simple Chore',
            'description' => 'This chore should be done on a monday.'
        ]);

        $this->assertCount(1, $this->household->chores);
    }

    /** @test */
    public function a_household_has_an_admin()
    {
        $this->assertInstanceOf('App\User', $this->household->admin);
    }
}
