<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

//function to generate fake name to database 

$factory->define(App\information::class, function (Faker $faker) {
    return [
        'firstname' => $faker->sentence(),
        'lastname' => $faker->sentence(),
        'age' => $faker->randomDigit(20,50),
        'birthday' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'position' => $faker->sentence()
    ];
});
