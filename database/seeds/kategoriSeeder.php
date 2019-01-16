<?php

use Illuminate\Database\Seeder;

class kategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategori')->insert(array(
        	'id_kategori'=>'1',
        	'nama_kategori'=>'kacamata',
        ));
        DB::table('kategori')->insert(array(
        	'id_kategori'=>'2',
        	'nama_kategori'=>'telinga',
        ));
        DB::table('kategori')->insert(array(
        	'id_kategori'=>'3',
        	'nama_kategori'=>'sepatu',
        ));
        DB::table('kategori')->insert(array(
        	'id_kategori'=>'4',
        	'nama_kategori'=>'helm',
        ));
        DB::table('kategori')->insert(array(
        	'id_kategori'=>'5',
        	'nama_kategori'=>'pakaian',
        ));
        DB::table('kategori')->insert(array(
        	'id_kategori'=>'6',
        	'nama_kategori'=>'tangan',
        ));
        DB::table('kategori')->insert(array(
        	'id_kategori'=>'7',
        	'nama_kategori'=>'wajah',
        ));
        DB::table('kategori')->insert(array(
        	'id_kategori'=>'8',
        	'nama_kategori'=>'lainnya',
        ));
    }
}
