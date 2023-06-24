<?php

namespace Database\Seeders;

use App\Models\Driver;
use App\Models\Forwarder;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
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
                    'id' => '1', 'type_id' => '1', 'login' => 'admin', 'password' => Hash::make('admin'), 'unhashed' => 'admin'
                ],

                [
                    'id' => '2', 'type_id' => '2', 'login' => 'user1', 'password' => Hash::make('password1'), 'unhashed' => 'password1'
                ],

                [
                    'id' => '3', 'type_id' => '2', 'login' => 'user2', 'password' => Hash::make('password2'), 'unhashed' => 'password2'
                ],

                [
                    'id' => '4', 'type_id' => '2', 'login' => 'user3', 'password' => Hash::make('password3'), 'unhashed' => 'password3'
                ],

                [
                    'id' => '5', 'type_id' => '3', 'login' => 'user4', 'password' => Hash::make('password4'), 'unhashed' => 'password4'
                ],

                [
                    'id' => '6', 'type_id' => '3', 'login' => 'user5', 'password' => Hash::make('password5'), 'unhashed' => 'password5'
                ],

                [
                    'id' => '7', 'type_id' => '3', 'login' => 'user6', 'password' => Hash::make('password6'), 'unhashed' => 'password6'
                ],

                [
                    'id' => '8', 'type_id' => '3', 'login' => 'user7', 'password' => Hash::make('password7'), 'unhashed' => 'password7'
                ],

                [
                    'id' => '9', 'type_id' => '3', 'login' => 'user8', 'password' => Hash::make('password8'), 'unhashed' => 'password8'
                ],

                [
                    'id' => '10', 'type_id' => '3', 'login' => 'user9', 'password' => Hash::make('password9'), 'unhashed' => 'password9'
                ]
            ]
        );
    }
}
