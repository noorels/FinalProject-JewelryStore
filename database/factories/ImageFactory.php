<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\image;
use Faker\Generator as Faker;

$factory->define(image::class, function (Faker $faker) {
    $imageables = [
        App\User::class,
        App\Product::class,
    ];

    $imageableType = $faker->randomElement($imageables);

    $imageable = factory($imageableType)->create();

    return [
        'url' => $faker->url.'image.jpg',
        'imageable_type' => $imageableType,
        'imageable_id' => $imageable->id,
    ];
});
