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
        	['nombre' => 'PENDIENTE']
        	['nombre' => 'CUMPLIDA']
        	['nombre' => 'NO CUMPLETADA']
        ]);
    }
}
