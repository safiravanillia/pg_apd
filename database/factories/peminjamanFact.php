<?php

use Faker\Generator as Faker;

$factory->define(App\peminjaman::class, function (Faker $faker) {
    $karyawan = factory(App\karyawan::class)->create();
    $admin = factory(App\admin::class)->create();
    $apd = factory(App\apd::class)->create();
    return [
        'kode_apd' => $apd->kode_apd,
        'nik' => $karyawan->nik,
        'username' => $admin->username,
        'jumlah_apd' => $faker->randomDigit,
        'tgl_pinjam' => $faker->date($format = 'Y-m-d'),
        'tgl_kembali' => $faker->date($format = 'Y-m-d'),
        'status' => $faker->word,
        'jenis' => $faker->boolean,
    ];
});
