<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Purchase;
use Faker\Generator as Faker;

$factory->define(Purchase::class, function (Faker $faker) {

    return [
        'pur_date' => $faker->word,
        'pur_billNum' => $faker->word,
        'pur_item' => $faker->word,
        'pur_quantity' => $faker->word,
        'pur_supplier' => $faker->word,
        'pur_price' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
