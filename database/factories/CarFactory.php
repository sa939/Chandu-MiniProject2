<?php

use App\Car;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Car::class, function (Faker $faker) {
    return [
        'Model' => $faker->randomElement(['Ford','Toyota','Honda']),
        'Make' => $faker->randomElement(['model1', 'model2', 'model3']),
        'year' => $faker->year,
    ];
});
