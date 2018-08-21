<?php

use Faker\Generator as Faker;

$factory->define(App\Actors::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'rating' => $faker->randomFloat($nbMaxDecimals = 2, $min = 1, $max = 10),
        'favorite_movie_id' => $faker->numberBetween(171,270)
    ];
});
