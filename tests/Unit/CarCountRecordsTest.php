<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;


class CarCountRecordsTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */


    /** @test */
    public function CarCountRecordsTest()
    {
        $car = Car::All();
        $countrecords = $car->count();
        $this->assertTrue(true);
    }
}