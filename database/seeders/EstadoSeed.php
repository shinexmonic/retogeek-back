<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class EstadoSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estados')->insert([
        	['id' => 1,'nombre' => 'PENDIENTE'],
        	['id' => 2,'nombre' => 'CUMPLIDA'],
        	['id' => 3,'nombre' => 'NO CUMPLETADA'],
        ]);
    }
}
