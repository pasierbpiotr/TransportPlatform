<?php

namespace Database\Seeders;

use App\Models\Driver;
use App\Models\DriverTransport;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class DriverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::withoutForeignKeyConstraints(function() {
            DriverTransport::truncate();
            Driver::truncate();
        });

        Driver::insert(
            [
                [
                    'id' => '1', 'name' => 'Jan', 'surname' => 'Kowalski', 'car' => 'Mercedes', 'user_id' => '5', 'forwarder_id' => '1'
                ],

                [
                    'id' => '2', 'name' => 'Piotr', 'surname' => 'Nowak', 'car' => 'Volvo', 'user_id' => '6', 'forwarder_id' => '2'
                ],

                [
                    'id' => '3', 'name' => 'Anna', 'surname' => 'Wiśniewska', 'car' => 'MAN', 'user_id' => '7', 'forwarder_id' => '3'
                ],

                [
                    'id' => '4', 'name' => 'Katarzyna', 'surname' => 'Jankowska', 'car' => 'Scania', 'user_id' => '8', 'forwarder_id' => '1'
                ],

                [
                    'id' => '5', 'name' => 'Tomasz', 'surname' => 'Kaczmarek', 'car' => 'Iveco', 'user_id' => '9', 'forwarder_id' => '2'
                ],

                [
                    'id' => '6', 'name' => 'Marek', 'surname' => 'Wójcik', 'car' => 'DAF', 'user_id' => '10', 'forwarder_id' => '3'
                ]
            ]
        );
    }
}
