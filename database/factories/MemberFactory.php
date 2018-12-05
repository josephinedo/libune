<?php

use Faker\Generator as Faker;

$factory->define(App\Member::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name(),
        'email' => $faker->unique()->safeEmail,
        'codigo' => $faker->randomNumber(6),
    ];
});
