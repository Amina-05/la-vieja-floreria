<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Producto;
use Faker\Generator as Faker;

$factory->define(Producto::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'precio' => $faker->numberBetween(1,1000),
        'marca' => $faker->word,
        'tipo' => $faker->word,
    ];
});
