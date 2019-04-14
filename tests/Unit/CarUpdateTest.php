<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;


class CarUpdateTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */

    /** @test */
    public function carupdatetest()
    {
        $car = Car::find(1);

        $car->year = "2000";

        $this->assertTrue($car->save());

    }
}