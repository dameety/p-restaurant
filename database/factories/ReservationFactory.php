<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Reservation::class, function (Faker $faker) {
    return [
        'published' => $faker->name,
        'title' => $faker->word,
        'name' => $faker->name,
        'time' => $faker->time(),
        'date' => $faker->date(),
        'email' => $faker->email,
        'phone' => $faker->phoneNumber,
        'number_of_people' => $faker->randomDigitNotNull,
    ];
});