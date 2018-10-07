<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Artical::class, function (Faker $faker) {
    return [
        'title' => $faker->title,
        'description' => $faker->name,
        'body' => $faker->text,
    ];
});
