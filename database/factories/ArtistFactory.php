<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Models\Artist::class, function (Faker $faker) {
    return [
        'artist_name' => $faker->name,
        'birthday' => $faker->dateTime,
        'description' => $faker->text,
    ];
});
