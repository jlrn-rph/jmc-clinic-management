<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Specialist;
use Faker\Generator as Faker;

$factory->define(Specialist::class, function (Faker $faker) {

    return [
        'sp_name' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
