<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Staffhc;
use Faker\Generator as Faker;

$factory->define(Staffhc::class, function (Faker $faker) {

    return [
        'hc_dateRegistered' => $faker->word,
        'hc_name' => $faker->word,
        'hc_gender' => $faker->word,
        'hc_dob' => $faker->word,
        'hc_address' => $faker->text,
        'hc_contact' => $faker->word,
        'hc_email' => $faker->word,
        'hc_specialist' => $faker->word,
        'hc_license' => $faker->word,
        'hc_status' => $faker->randomDigitNotNull,
        'hc_image' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
