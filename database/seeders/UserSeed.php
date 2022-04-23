<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'name' => 'moni',
            'email' => 'moni@gmail.com',
            'password' => bcrypt('12xAmable')
     	]);
    }
}
