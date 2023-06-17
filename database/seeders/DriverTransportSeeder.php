<?php

namespace Database\Seeders;

use App\Models\DriverTransport;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class DriverTransportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::withoutForeignKeyConstraints(function() {
            DriverTransport::truncate();
        });

        DriverTransport::insert(
            [
                [
                    'driver_id' => '1', 'transport_id' => '1'
                ],

                [
                    'driver_id' => '2', 'transport_id' => '2'
                ],

                [
                    'driver_id' => '3', 'transport_id' => '3'
                ],

                [
                    'driver_id' => '4', 'transport_id' => '4'
                ],

                [
                    'driver_id' => '5', 'transport_id' => '5'
                ],

                [
                    'driver_id' => '6', 'transport_id' => '6'
                ],

                [
                    'driver_id' => '6', 'transport_id' => '7'
                ],

                [
                    'driver_id' => '5', 'transport_id' => '8'
                ],

                [
                    'driver_id' => '4', 'transport_id' => '9'
                ],

                [
                    'driver_id' => '3', 'transport_id' => '10'
                ],

                [
                    'driver_id' => '2', 'transport_id' => '11'
                ],

                [
                    'driver_id' => '1', 'transport_id' => '12'
                ],

                [
                    'driver_id' => '1', 'transport_id' => '13'
                ],

                [
                    'driver_id' => '2', 'transport_id' => '14'
                ],

                [
                    'driver_id' => '3', 'transport_id' => '15'
                ],

                [
                    'driver_id' => '4', 'transport_id' => '16'
                ]
            ]
            );
    }
}
