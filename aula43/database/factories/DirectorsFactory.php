<?php

use Faker\Generator as Faker;

$factory->define(App\Directors::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'birthday' => $faker->date
    ];
});
