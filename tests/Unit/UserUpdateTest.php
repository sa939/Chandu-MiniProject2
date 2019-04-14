<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;


class UserUpdateTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */

    /** @test */
    public function userupdatetest()
    {
        $user = User::find(5);

        $user->name = 'Steve Smith';

        $this->assertTrue($user->save());

    }
}