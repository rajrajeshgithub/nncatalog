<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Catalog::class, function (Faker $faker) {
    return [
        'title'=> rtrim($faker->sentence(5,10),'.'),
        'description' => $faker->paragraph(rand(1,3)),
        'catalog_for'=>"nandansons.com",
        'page_count'=>rand(0,10),
        'admin_id' => rand(1,3),
        'status' => 1,

    ];
});
