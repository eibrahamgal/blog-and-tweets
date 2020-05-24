<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Entry;

$factory->define(Entry::class, function (Faker $faker) {
    return [
        'title'   => $faker->sentence,
        'content' => $faker->text,
        'user_id' => rand(1,10)
    ];
});
