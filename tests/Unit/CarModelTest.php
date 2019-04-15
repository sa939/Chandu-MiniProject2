<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;


class CarModelTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */


    /** @test */
    public function CarModelTest()
    {
        $car = Car::find(4);
        $carmake = $car->Make;
        $this->assertInternalType('string', $carmake);
    }
}