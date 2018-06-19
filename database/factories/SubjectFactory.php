<?php

use Faker\Generator as Faker;

$factory->define(App\Subject::class, function (Faker $faker) {
    return [
        'name' => $name = $faker->unique()->randomElement(['PHP','JAVA','C#','JAVASCRIPT']),
        'slug' => str_slug($name)
    ];
});
