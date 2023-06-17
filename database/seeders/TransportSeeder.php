<?php

namespace Database\Seeders;

use App\Models\DriverTransport;
use App\Models\Transport;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class TransportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::withoutForeignKeyConstraints(function() {
            DriverTransport::truncate();
            Transport::truncate();
        });

        Transport::insert(
            [
                [
                    'id' => '1', 'starting_place' => 'Warszawa', 'finishing_place' => 'Kraków', 'merchandise' => 'Produkt A', 'mass' => '1000.50', 'transport_date' => '2023-06-18'
                ],

                [
                    'id' => '2', 'starting_place' => 'Kraków', 'finishing_place' => 'Gdańsk', 'merchandise' => 'Produkt B', 'mass' => '800.25', 'transport_date' => '2023-06-19'
                ],

                [
                    'id' => '3', 'starting_place' => 'Gdańsk', 'finishing_place' => 'Wrocław', 'merchandise' => 'Produkt C', 'mass' => '1500.75', 'transport_date' => '2023-06-20'
                ],

                [
                    'id' => '4', 'starting_place' => 'Wrocław', 'finishing_place' => 'Łódź', 'merchandise' => 'Produkt D', 'mass' => '1200.80', 'transport_date' => '2023-06-21'
                ],

                [
                    'id' => '5', 'starting_place' => 'Łódź', 'finishing_place' => 'Poznań', 'merchandise' => 'Produkt E', 'mass' => '900.60', 'transport_date' => '2023-06-22'
                ],

                [
                    'id' => '6', 'starting_place' => 'Poznań', 'finishing_place' => 'Szczecin', 'merchandise' => 'Produkt F', 'mass' => '1100.70', 'transport_date' => '2023-06-23'
                ],

                [
                    'id' => '7', 'starting_place' => 'Szczecin', 'finishing_place' => 'Lublin', 'merchandise' => 'Produkt G', 'mass' => '1400.90', 'transport_date' => '2023-06-24'
                ],

                [
                    'id' => '8', 'starting_place' => 'Lublin', 'finishing_place' => 'Katowice', 'merchandise' => 'Produkt H', 'mass' => '1300.55', 'transport_date' => '2023-06-25'
                ],

                [
                    'id' => '9', 'starting_place' => 'Katowice', 'finishing_place' => 'Bydgoszcz', 'merchandise' => 'Produkt I', 'mass' => '950.35', 'transport_date' => '2023-06-26'
                ],

                [
                    'id' => '10', 'starting_place' => 'Bydgoszcz', 'finishing_place' => 'Warszawa', 'merchandise' => 'Produkt J', 'mass' => '1050.45', 'transport_date' => '2023-06-27'
                ],

                [
                    'id' => '11', 'starting_place' => 'Gdańsk', 'finishing_place' => 'Kraków', 'merchandise' => 'Produkt K', 'mass' => '1150.65', 'transport_date' => '2023-06-28'
                ],

                [
                    'id' => '12', 'starting_place' => 'Kraków', 'finishing_place' => 'Gdańsk', 'merchandise' => 'Produkt L', 'mass' => '750.30', 'transport_date' => '2023-06-29'
                ],

                [
                    'id' => '13', 'starting_place' => 'Łódź', 'finishing_place' => 'Warszawa', 'merchandise' => 'Produkt M', 'mass' => '1600.95', 'transport_date' => '2023-06-30'
                ],

                [
                    'id' => '14', 'starting_place' => 'Wrocław', 'finishing_place' => 'Łódź', 'merchandise' => 'Produkt N', 'mass' => '1350.85', 'transport_date' => '2023-07-01'
                ],

                [
                    'id' => '15', 'starting_place' => 'Łódź', 'finishing_place' => 'Poznań', 'merchandise' => 'Produkt O', 'mass' => '950.35', 'transport_date' => '2023-07-02'
                ],

                [
                    'id' => '16', 'starting_place' => 'Poznań', 'finishing_place' => 'Wrocław', 'merchandise' => 'Produkt P', 'mass' => '1250.50', 'transport_date' => '2023-07-03'
                ]
            ]
        );
    }
}
