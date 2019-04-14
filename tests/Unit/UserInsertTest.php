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


    /** @test */
    public function userinserttest()
    {
        $user = new User();
        $user->name = "Chandu2";
        $user->email = "testemail5";
        $user->password = "testpassword5";
        $this->assertTrue($user->save());
    }
}