<?php

namespace Database\Seeders;

use App\Models\Driver;
use App\Models\Forwarder;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::withoutForeignKeyConstraints(function() {
            Forwarder::truncate();
            Driver::truncate();
        });

        User::insert(
            [
                [
                    'id' => '1', 'type_id' => '1', 'login' => 'admin', 'password' => 'admin'
                ],

                [
                    'id' => '2', 'type_id' => '2', 'login' => 'user1', 'password' => 'password1'
                ],

                [
                    'id' => '3', 'type_id' => '2', 'login' => 'user2', 'password' => 'password2'
                ],

                [
                    'id' => '4', 'type_id' => '2', 'login' => 'user3', 'password' => 'password3'
                ],

                [
                    'id' => '5', 'type_id' => '3', 'login' => 'user4', 'password' => 'password4'
                ],

                [
                    'id' => '6', 'type_id' => '3', 'login' => 'user5', 'password' => 'password5'
                ],

                [
                    'id' => '7', 'type_id' => '3', 'login' => 'user6', 'password' => 'password6'
                ],

                [
                    'id' => '8', 'type_id' => '3', 'login' => 'user7', 'password' => 'password7'
                ],

                [
                    'id' => '9', 'type_id' => '3', 'login' => 'user8', 'password' => 'password8'
                ],

                [
                    'id' => '10', 'type_id' => '3', 'login' => 'user9', 'password' => 'password9'
                ]
            ]
        );
    }
}
