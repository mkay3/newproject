<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->streetName,
        'description' => $faker->paragraph($nbSentences = 6, $variableNbSentences = true),
        'image_name' => str_random(5).".jpg",
        'user_id' =>  rand(1,2),
        'category_id' => rand(1,5)
    ];
});
