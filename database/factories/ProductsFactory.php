<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
      'name' => $faker->sentence(2),
      'price' => $faker->numberBetween(1000, 2000),
      'description' => $faker->sentence(50),
      'brand_id'=> $faker->numberBetween(1, 7),
      'league_id'=> $faker->numberBetween(1, 3),
      'size_id'=> $faker->numberBetween(1, 5)
    ];
});
