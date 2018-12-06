<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Enquiry::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'phone' => $faker->phoneNumber,
        'body' => $faker->text,
        'published' => $faker->dateTime
    ];
});
