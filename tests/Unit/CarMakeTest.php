<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;


class CarMakeTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */


    /** @test */
    public function CarMakeTest()
    {
        $car = Car::find(4);
        $carmake = $car->Model;
        $this->assertContains($carmake, ['Ford', 'Honda', 'Toyota']);
    }
}