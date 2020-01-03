<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Consult;
use Faker\Generator as Faker;

$factory->define(Consult::class, function (Faker $faker) {

    return [
        'con_dateSxStart' => $faker->word,
        'con_height' => $faker->word,
        'con_weight' => $faker->word,
        'con_bp' => $faker->word,
        'con_symptom' => $faker->text,
        'con_diagnosis' => $faker->text,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
