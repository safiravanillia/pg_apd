<?php

use Illuminate\Database\Seeder;

class adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin')->insert(array(
        	'username'=>'admin1',
        	'password'=>bcrypt('pass1'),
        ));
        DB::table('admin')->insert(array(
        	'username'=>'admin2',
        	'password'=>bcrypt('pass2'),
        ));
    }
}
