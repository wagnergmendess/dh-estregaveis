<?php

use Faker\Generator as Faker;

$factory->define(App\Movie::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'awards' => $faker->numberBetween(1,10),
        'length' => $faker->numberBetween(50,200),
        'genre_id' => $faker->numberBetween(1,10),
        'revenue' => $faker->randomFloat($nbMaxDecimals = 2, $min = 1, $max = 10),
        'director_id' => $faker->numberBetween(41,90)
    ];
});
