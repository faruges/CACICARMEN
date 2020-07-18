<?php

use App\Model\Rol;
use Faker\Generator as Faker;

$factory->define(Rol::class, function (Faker $faker) {
    return [
        'nombre' => $faker->word,
        'slug' => $faker->word
    ];
});
