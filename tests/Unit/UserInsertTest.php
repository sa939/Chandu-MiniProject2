<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;


class UserInsertTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testFailure()
    {
        $user = new User();
        $user->name = "Chandu";
        $user->email = "testemail";
        $user->password = "testpassword";
        $this->assertTrue($user->save());
    }
}
