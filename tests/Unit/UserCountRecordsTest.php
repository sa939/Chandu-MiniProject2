<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;


class UserCountRecordsTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */


    /** @test */
    public function usercountrecordstest()
    {
        $user = User::All();
        $countrecords = $user->count();
        $this->assertTrue(true);
    }
}