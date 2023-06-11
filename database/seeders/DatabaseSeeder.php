<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CompaniesSeeder::class,
            DriversSeeder::class,
            DriversTransportsSeeder::class,
            ForwardersSeeder::class,
            TransportsSeeder::class,
            UserTypeSeeder::class
        ]);
    }
}
