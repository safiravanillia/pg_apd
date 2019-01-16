<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(adminSeeder::class);
        $this->call(karyawanSeeder::class);
        $this->call(kategoriSeeder::class);
        $this->call(apdSeeder::class);
        $this->call(peminjamanSeeder::class);
    }
}
