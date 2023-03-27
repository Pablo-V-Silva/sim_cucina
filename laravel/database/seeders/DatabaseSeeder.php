<?php

namespace Database\Seeders;

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
        $this->call(CombustibileSeeder::class);
        $this->call(ConsumoSeeder::class);
        $this->call(RoleSeeder::class);

    }
}
