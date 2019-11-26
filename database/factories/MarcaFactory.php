<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Marca;
use Faker\Generator as Faker;

$factory->define(Marca::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'cuit' => $faker->numberBetween(1,1000),
        'direccion' => $faker->word,
        'localidad' => $faker->word,
        'codigo_postal' => $fake->numberBetween(1,1000),
    ];
});
