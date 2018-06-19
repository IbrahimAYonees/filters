<?php

use Faker\Generator as Faker;

$factory->define(App\CourseUser::class, function (Faker $faker) {
    return [
        'user_id' => 1,
        'course_id' => $faker->unique()->numberBetween(1,10),
    ];
});
