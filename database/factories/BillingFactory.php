<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Billing;
use Faker\Generator as Faker;

$factory->define(Billing::class, function (Faker $faker) {

    return [
        'bil_admission' => $faker->word,
        'bil_consultation' => $faker->word,
        'bil_lab' => $faker->word,
        'bil_others' => $faker->word,
        'bil_subtotal' => $faker->word,
        'bil_vat' => $faker->word,
        'bil_total' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
