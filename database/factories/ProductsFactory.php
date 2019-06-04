<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
      'name' => $faker->sentence(2),
      'price' => $faker->numberBetween(1000, 2000),
      'description' => $faker->text(50),
    ];
});
