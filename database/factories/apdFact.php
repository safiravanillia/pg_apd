<?php

use Faker\Generator as Faker;

$factory->define(App\apd::class, function (Faker $faker) {
    $kategori = factory(App\kategori::class)->create();
    return [
        'nama_apd' => $faker->sentence,
        'id_kategori' => $kategori->id_kategori,
        'durasi' => $faker->randomDigit,
        'jumlah_stok' => $faker->randomDigit,
        'jumlah_tersedia' => $faker->randomDigit,
    ];
});
