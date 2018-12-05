<?php

use Faker\Generator as Faker;

$factory->define(App\Book::class, function (Faker $faker) {
    return [
    	'user_id' => function () {
            return factory(App\User::class)->create()->id;
        },
        'book_autor_id' => function () {
            return factory(App\Autor::class)->create()->id;
        },
		'titulo' => $faker->sentence(2),
        'seccion' => 'Literatura',
        'ejemplar' => $faker->randomNumber(1),
        'estado' => $faker->word(),
        'codigo' => $faker->word(8),
        'edicion' => $faker->year($max = 'now'),
    ];
});
