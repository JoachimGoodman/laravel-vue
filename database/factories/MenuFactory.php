<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Menu;
use Faker\Generator as Faker;

$factory->define(Menu::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'description' => $faker->paragraph(2, true),
        'price' => $faker->numberBetween(49, 999),
        'resto_id'=> 1,
        'category_id'=> 1,
    ];
});
