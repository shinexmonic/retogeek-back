<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CargoSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cargos')->insert([
        	['nombre'  => 'Desarrollador'],
        	['nombre'  => 'Contador'],
        	['nombre'  => 'Administrador'],
        	['nombre'  => 'Diseñador'],
        ]);
    }
}
