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

$factory->define(App\Models\Playlist::class, function (Faker $faker) {
    return [
        'playlist_name' => $faker->sentence,
        'user_id' => 2,
        'avatar' => $faker->sentence,
    ];
});
