<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Pxchart;
use Faker\Generator as Faker;

$factory->define(Pxchart::class, function (Faker $faker) {

    return [
        'ch_dateSxStart' => $faker->word,
        'ch_symptom' => $faker->word,
        'ch_meds' => $faker->word,
        'ch_diagnosis' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
