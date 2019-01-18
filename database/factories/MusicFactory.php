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

$factory->define(App\Models\Music::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'lyrics' => $faker->realText,
        'view_count' => 0,
        'artist_id' => 1,
        'album_id' => 1,
        'path' => 'music.mp3',
        'type' => 'mp4',
    ];
});

