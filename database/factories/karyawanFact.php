<?php

use Faker\Generator as Faker;

$factory->define(App\karyawan::class, function (Faker $faker) {
    return [
        'nik' => $faker->word,
        'nama_karyawan' => $faker->name,
        'departemen' => $faker->sentence,
        'pass' => bcrypt('pass'),
    ];
});
