<?php

use Faker\Generator as Faker;

$factory->define(App\kategori::class, function (Faker $faker) {
    return [
        'nama_kategori' => $faker->word,
    ];
});
