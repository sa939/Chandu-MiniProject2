<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;


class CarInsertTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */


    /** @test */
    public function carinserttest()
    {
        $car = new Car();
        $car->Model = "Ford";
        $car->Make = "Mustang";
        $car->year = "1996";
        $this->assertTrue($car->save());
    }
}