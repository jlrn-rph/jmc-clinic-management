<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ReturnPurchase;
use Faker\Generator as Faker;

$factory->define(ReturnPurchase::class, function (Faker $faker) {

    return [
        'ret_date' => $faker->word,
        'ret_billNum' => $faker->word,
        'ret_item' => $faker->word,
        'ret_quantity' => $faker->word,
        'ret_supplier' => $faker->word,
        'ret_price' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
