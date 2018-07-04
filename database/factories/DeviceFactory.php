<?php

use Faker\Generator as Faker;

$factory->define(App\Device::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'battery_status' => str_random(5),
        'longitude' => $faker->longitude(), 
        'latitude' => $faker->latitude(),
    ];
});
