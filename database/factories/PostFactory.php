<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Post;

$factory->define(Post::class, function (Faker $faker) {
    return [
      'author'=> $faker->userName,
      'content'=> $faker->text,
      'creation_date'=> $faker->dateTimeThisDecade,
    ];
});
