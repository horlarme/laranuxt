<?php

namespace Tests\Feature;

use acidjazz\metapi\MetApi;
use App\Models\User;
use Tests\TestCase;

class UserProfile extends TestCase
{
    use MetApi;

    public function testUsersAreNotMoreThanOne()
    {
        $this->assertDatabaseCount('users', 1);
    }

    public function testFetchProfile()
    {
        $this->getJson(route('profile'))
            ->assertStatus(200);
    }

    public function testUpdateProfile()
    {
        $profile = User::factory()->make();

        $this->patchJson(route('profile.update'), $profile->toArray())
            ->assertStatus(200)
            ->assertJsonStructure($this->success($profile));
    }
}
