<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Appointment;
use Faker\Generator as Faker;

$factory->define(Appointment::class, function (Faker $faker) {

    return [
        'ap_pxName' => $faker->word,
        'ap_regDate' => $faker->word,
        'ap_contact' => $faker->word,
        'ap_doctor' => $faker->word,
        'ap_specialist' => $faker->word,
        'ap_reason' => $faker->text,
        'ap_status' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
