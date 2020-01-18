<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Staff;
use Faker\Generator as Faker;

$factory->define(Staff::class, function (Faker $faker) {

    return [
        'stf_regNum' => $faker->word,
        'stf_regDate' => $faker->word,
        'stf_emType' => $faker->word,
        'stf_department' => $faker->word,
        'stf_image' => $faker->word,
        'stf_name' => $faker->word,
        'stf_gender' => $faker->word,
        'stf_dob' => $faker->word,
        'stf_Address' => $faker->word,
        'stf_contact' => $faker->word,
        'stf_email' => $faker->word,
        'stf_status' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
