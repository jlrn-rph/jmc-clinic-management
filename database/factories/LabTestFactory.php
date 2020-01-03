<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\LabTest;
use Faker\Generator as Faker;

$factory->define(LabTest::class, function (Faker $faker) {

    return [
        'lt_name' => $faker->word,
        'lt_cost' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
