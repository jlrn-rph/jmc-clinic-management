<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Payment;
use Faker\Generator as Faker;

$factory->define(Payment::class, function (Faker $faker) {

    return [
        'pay_regNumber' => $faker->word,
        'pay_regDate' => $faker->word,
        'pay_name' => $faker->word,
        'pay_address' => $faker->text,
        'pay_admission' => $faker->word,
        'pay_consultation' => $faker->word,
        'pay_lab' => $faker->word,
        'pay_others' => $faker->word,
        'pay_subtotal' => $faker->word,
        'pay_vat' => $faker->word,
        'pay_total' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
