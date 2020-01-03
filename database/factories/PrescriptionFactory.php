<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Prescription;
use Faker\Generator as Faker;

$factory->define(Prescription::class, function (Faker $faker) {

    return [
        'rx_generic' => $faker->word,
        'rx_brand' => $faker->word,
        'rx_freq' => $faker->word,
        'rx_days' => $faker->word,
        'rx_instruct' => $faker->text,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
