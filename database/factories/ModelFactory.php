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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Credential::class, function (Faker\Generator $faker) {
    return [
        'type' => $faker->sentence,
        'user_id' => $faker->unique()->numberBetween(0, 10),
        'description' => $faker->paragraph,
        'date_expire' => $faker->dateTime('now', '+ 10 days')
    ];
});

$factory->define(App\Post::class, function (Faker\Generator $faker) {
    return [
        'user_id' => $faker->numberBetween(0, 10),
        'title' => $faker->sentence,
        'post' => $faker->paragraph
    ];
});

$factory->define(App\Product::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->word,
        'price' => $faker->numberBetween(1, 1000)
    ];
});

$factory->define(App\Console::class, function (Faker\Generator $faker) {
    return [
        'user_id' => $faker->numberBetween(0, 10),
        'name' => $faker->word,
        'plataform' => $faker->word,
        'price' => $faker->numberBetween(1000, 10000)
    ];
});

$factory->define(App\Game::class, function (Faker\Generator $faker) {
    return [
        'console_id' => $faker->numberBetween(0, 10),
        'title' => $faker->sentence,
        'description' => $faker->paragraph
    ];
});
