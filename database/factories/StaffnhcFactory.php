<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Staffnhc;
use Faker\Generator as Faker;

$factory->define(Staffnhc::class, function (Faker $faker) {

    return [
        'nhc_dateRegistered' => $faker->word,
        'nhc_name' => $faker->word,
        'nhc_gender' => $faker->word,
        'nhc_dob' => $faker->word,
        'nhc_address' => $faker->text,
        'nhc_contact' => $faker->word,
        'nhc_email' => $faker->word,
        'nhc_specialist' => $faker->word,
        'nhc_status' => $faker->randomDigitNotNull,
        'nhc_image' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
