<?php

use Faker\Generator as Faker;

$factory->define(App\admin::class, function (Faker $faker) {
    return [
        'username' => $faker->word,
        'password' => bcrypt('pass'),
    ];
});
