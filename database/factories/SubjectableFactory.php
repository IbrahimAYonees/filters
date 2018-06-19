<?php

use Faker\Generator as Faker;

$factory->define(App\Subjectable::class, function (Faker $faker) {
    return [
        'subject_id' => $faker->numberBetween(1,4),
        'subjectable_id' => ($faker->unique()->numberBetween(11,20)) - 10,
        'subjectable_type' => 'App\Course'
    ];
});
