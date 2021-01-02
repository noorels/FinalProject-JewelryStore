<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'Ctegory_id'=>\App\Product::all(),
        'Image' => $faker->Image,
        'Title' => $faker->Title,
        'Price' => $faker->Price,

    ];
});
