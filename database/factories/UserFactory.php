<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use APP\Producto;
use APP\Marca;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

$factory->define(Producto::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'precio' => $faker->numberBetween(1,1000),
        'marca' => $faker->word,
        'tipo' => $faker->word,
    ];
});

