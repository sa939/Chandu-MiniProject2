<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;


class CarYearTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */


    /** @test */
    public function CarYearTest()
    {
        $car = Car::find(1);
        $caryear = (int) $car->year;
        $this->assertIsInt($caryear);
    }
}