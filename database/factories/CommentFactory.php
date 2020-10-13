<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;


$factory->define(App\Comment::class, function (Faker $faker) {
    return [
        'book_id' => $faker->numberBetween(1, 15),
        'comm' =>$faker->sentence(15),
    ];
});
