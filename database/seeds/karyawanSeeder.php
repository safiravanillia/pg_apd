<?php

use Illuminate\Database\Seeder;

class karyawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('karyawan')->insert(array(
        	'nik'=>'T354761',
            'nama_karyawan'=>'Safira Vanillia Putri',
            'departemen'=>'Dep. Teknologi dan Informasi',
            'pass'=>bcrypt('pass1'),
        ));
        DB::table('karyawan')->insert(array(
        	'nik'=>'T354762',
            'nama_karyawan'=>'Fadilla Sukma Alfiani',
            'departemen'=>'Dep. Teknologi dan Informasi',
            'pass'=>bcrypt('pass2'),
        ));
        DB::table('karyawan')->insert(array(
        	'nik'=>'T354763',
            'nama_karyawan'=>'Rizvi Shofbrina',
            'departemen'=>'Dep. Produksi',
            'pass'=>bcrypt('pass3'),
        ));
        DB::table('karyawan')->insert(array(
        	'nik'=>'T354764',
            'nama_karyawan'=>'Modista Garsia',
            'departemen'=>'Dep. Produksi',
            'pass'=>bcrypt('pass4'),
        ));
        DB::table('karyawan')->insert(array(
        	'nik'=>'T354765',
            'nama_karyawan'=>'Ghifaroza Rahmadiana',
            'departemen'=>'Dep. Pemasaran',
            'pass'=>bcrypt('pass5'),
        ));
        DB::table('karyawan')->insert(array(
        	'nik'=>'T354766',
            'nama_karyawan'=>'Navinda Meutia',
            'departemen'=>'Dep. Produksi',
            'pass'=>bcrypt('pass6'),
        ));
        DB::table('karyawan')->insert(array(
        	'nik'=>'T354767',
            'nama_karyawan'=>'Rifka Annisa',
            'departemen'=>'Dep. LK3',
            'pass'=>bcrypt('pass7'),
        ));
        DB::table('karyawan')->insert(array(
        	'nik'=>'T354768',
            'nama_karyawan'=>'Yasinta Romadhona',
            'departemen'=>'Dep. Produksi',
            'pass'=>bcrypt('pass8'),
        ));
        DB::table('karyawan')->insert(array(
        	'nik'=>'T354769',
            'nama_karyawan'=>'Sari Wahyuningsih',
            'departemen'=>'Dep. LK3',
            'pass'=>bcrypt('pass9'),
        ));
        DB::table('karyawan')->insert(array(
        	'nik'=>'T354760',
            'nama_karyawan'=>'Aprillia Khairunnisa',
            'departemen'=>'Dep. LK3',
            'pass'=>bcrypt('pass10'),
        ));
    }
}
