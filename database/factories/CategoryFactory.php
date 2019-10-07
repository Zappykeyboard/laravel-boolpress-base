<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Category;

$factory->define(Category::class, function (Faker $faker) {
    $catNames = ['politica','automobili', 'vacanze'
                , 'lavoro', 'economia', 'videogiochi'
                , 'film', 'casa', 'famiglia'
                , 'religione'];
    return [
        'name'=> $faker->unique()->randomElement($catNames)
    ];
});
