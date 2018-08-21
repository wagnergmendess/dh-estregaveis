<?php

use Faker\Generator as Faker;

//sempre q for usar o faker, usar como base -> https://github.com/fzaninotto/Faker

$factory->define(App\Genres::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'ranking' => $faker->unique()->numberBetween(200,300),
        'active' => $faker->boolean($chanceOfGettingTrue = 80)
    ];
});
