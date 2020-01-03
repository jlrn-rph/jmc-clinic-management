<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Doctor;
use Faker\Generator as Faker;

$factory->define(Doctor::class, function (Faker $faker) {

    return [
        'dr_regNum' => $faker->word,
        'dr_regDate' => $faker->word,
        'dr_image' => $faker->word,
        'dr_specialist' => $faker->word,
        'dr_license' => $faker->word,
        'dr_name' => $faker->word,
        'dr_gender' => $faker->word,
        'dr_dob' => $faker->word,
        'dr_address' => $faker->text,
        'dr_contact' => $faker->word,
        'dr_email' => $faker->word,
        'dr_fee' => $faker->word,
        'dr_timeIn' => $faker->word,
        'dr_timeOut' => $faker->word,
        'dr_daysAvail' => $faker->word,
        'dr_status' => $faker->randomDigitNotNull,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
