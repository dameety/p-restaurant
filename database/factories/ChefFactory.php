<?php

use App\Models\Chef;
use Faker\Generator as Faker;

$factory->define(Chef::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'role' => "Chef",
        'published' => \Illuminate\Support\Carbon::now(),
        'bio' => $faker->words,
    ];
});
