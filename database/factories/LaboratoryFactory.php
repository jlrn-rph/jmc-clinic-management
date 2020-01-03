<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Laboratory;
use Faker\Generator as Faker;

$factory->define(Laboratory::class, function (Faker $faker) {

    return [
        'lab_regNumber' => $faker->word,
        'lab_regDate' => $faker->word,
        'lab_name' => $faker->word,
        'lab_address' => $faker->text,
        'lab_dob' => $faker->word,
        'lab_gender' => $faker->word,
        'lab_contact' => $faker->word,
        'lab_email' => $faker->word,
        'lab_doctor' => $faker->word,
        'lab_test' => $faker->word,
        'lab_status' => $faker->randomDigitNotNull,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
