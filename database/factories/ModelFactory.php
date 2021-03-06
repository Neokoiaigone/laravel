<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Article::class, function (Faker\Generator $faker) {

    return [
        'title' => $faker->title,
        'content' => $faker->paragraph,
        'images' =>$faker->imageUrl($width = 256, $height = 256),
        'user_id' => $faker->numberBetween(1, 30),
    ];
});

$factory->define(App\Comment::class, function (Faker\Generator $faker) {

    return [
        'content' => $faker->paragraph,
        'article_id' => $faker->numberBetween(1, 30),
        'user_id' => $faker->numberBetween(1, 30),
    ];
});
