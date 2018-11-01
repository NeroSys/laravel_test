<?php

use Faker\Generator as Faker;
use \App\User;
use \App\Product;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(\App\Order::class, function (Faker $faker) {

    $user = User::inRandomOrder()->first();
    $product = Product::inRandomOrder()->first();




    return [
        'user_id' => $user->id,
        'product_id' => $product->id,
        'order_number' => $faker->unique()->randomDigit,
    ];
});
