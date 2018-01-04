<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class ViewChoresTest extends TestCase
{
    use DatabaseMigrations;

    protected $chore;
    protected $household;
    protected $user;

    public function setUp()
    {
        parent::setUp();

        $this->user = factory('App\User')->create();
        $this->household = factory('App\Household')->create(['user_id' => $this->user->id]);
        $this->chore = factory('App\Chore')->create(['household_id' => $this->household->id]);
    }

    /** @test */
    public function a_user_can_view_all_chores()
    {
        $this->be($this->user);

        $this->get($this->chore->household->path() . '/chores')
            ->assertSee($this->chore->name);
    }

    /** @test */
    public function a_user_can_view_a_single_chore()
    {
        $this->be($this->user);

        $this->get($this->chore->path())
            ->assertSee($this->chore->name);
    }
}
