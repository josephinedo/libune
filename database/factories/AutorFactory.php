<?php

use Faker\Generator as Faker;

$factory->define(App\Autor::class, function (Faker $faker) {
    return [
        'nombre' => $faker->firstName(),
        'apellido' => $faker->lastName(),
    ];
});
