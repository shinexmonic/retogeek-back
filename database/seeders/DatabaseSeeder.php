<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\CargoSeed;
use Database\Seeders\EstadoSeed;
use Database\Seeders\UserSeed;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            // \App\Models\User::factory(10)->create();
            CargoSeed::class,
            EstadoSeed::class,
            UserSeed::class,
        ]);
    }
}
