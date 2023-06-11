<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\User_Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class UserTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::withoutForeignKeyConstraints(function() {
            User::truncate();
        });

        User_Type::insert(
            [
                [
                    'id' => '1', 'title' => 'admin'
                ],

                [
                    'id' => '2', 'title' => 'forwarder'
                ],

                [
                    'id' => '3', 'title' => 'driver'
                ],
            ]
        );
    }
}
