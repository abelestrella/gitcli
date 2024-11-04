<?php

namespace Database\Seeders;

use App\Models\Computer;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        /*
        $this->call([
            UserSeeder::class,
            ComputerSeeder::class,
        ]);
        */
        User::factory(10)->create();
        Computer::factory(10)->create();
    }
}
