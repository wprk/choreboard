<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class ViewHouseholdsTest extends TestCase
{
    use DatabaseMigrations;

    protected $household;
    protected $user;

    public function setUp()
    {
        parent::setUp();

        $this->user = factory('App\User')->create();
        $this->household = factory('App\Household')->create(['user_id' => $this->user->id]);
    }

    /** @test */
    public function an_authenticated_user_can_view_all_households()
    {
        $this->be($this->user);

        $this->get('/households')
            ->assertSee($this->household->name);
    }

    /** @test */
    public function an_authenticated_user_can_view_a_single_household()
    {
        $this->be($this->user);

        $this->get($this->household->path())
            ->assertSee($this->household->name);
    }

    /** @test */
    public function an_authenticated_user_can_add_a_chore_to_a_household()
    {
        $this->be($this->user);

        $chore = factory('App\Chore')->make();
        $this->post($this->household->path() . '/chores', $chore->toArray());

        print_r($chore->toArray());

        $this->get($chore->path())
            ->assertSee($chore->name);
    }

    /** @test */
    public function unauthenticated_users_cannot_add_chores()
    {
        $this->expectException('Illuminate\Auth\AuthenticationException');

        $this->post($this->household->path() . '/chores', []);
    }
}
