<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'user_id' => factory(\App\User::class)->create(),
        'excerpt' => $faker->sentence,
        'body' => $faker->paragraph
    ];
});
