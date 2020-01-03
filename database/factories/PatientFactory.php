<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Patient;
use Faker\Generator as Faker;

$factory->define(Patient::class, function (Faker $faker) {

    return [
        'px_regNumber' => $faker->word,
        'px_regDate' => $faker->word,
        'px_image' => $faker->word,
        'px_name' => $faker->word,
        'px_address' => $faker->text,
        'px_dob' => $faker->word,
        'px_gender' => $faker->word,
        'px_contact' => $faker->word,
        'px_email' => $faker->word,
        'px_doctor' => $faker->word,
        'px_status' => $faker->randomDigitNotNull,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
