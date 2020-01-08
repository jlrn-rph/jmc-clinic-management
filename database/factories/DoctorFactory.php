<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Doctor;
use Faker\Generator as Faker;

$factory->define(Doctor::class, function (Faker $faker) {
    //$gender = $faker->randomElement(['Male','Female']);
    //$gender = [null|'male'|'female'];
    return [
        'dr_regNum' => $faker->randomDigit(5),
        'dr_regDate' => $faker->date('Y-m-d H:i:s'),
        'dr_image' => $faker->word,
        'dr_specialist' => $faker->word,
        'dr_license' => $faker->randomDigit(5),
        'dr_name' => $faker->name,
        'dr_gender' => $faker->randomDigit(5),
        'dr_dob' => $faker->dateTimeBetween('1980-01-01','1985-01-01')->format('d/m/Y'),
        'dr_address' => $faker->address,
        'dr_contact' => $faker->phoneNumber,
        'dr_email' => $faker->safeEmail,
        'dr_fee' => $faker->randomDigit(5),
        'dr_timeIn' => $faker->time($format = 'H:i:', $max = 'now'),
        'dr_timeOut' => $faker->time($format = 'H:i:', $max = 'now'),
        'dr_daysAvail' => $faker->randomDigit(5),
        'dr_status' => $faker->randomDigit(5),
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
