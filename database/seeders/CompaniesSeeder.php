<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Companies;
use App\Models\Forwarders;
use Illuminate\Support\Facades\Schema;

class CompaniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::withoutForeignKeyConstraints(function() {
            Forwarders::truncate();
        });

        Companies::insert(
            [
                [
                    'id' => '1', 'name' => 'Firma Budowlana', 'street' => 'Piękna 10', 'city' => 'Warszawa', 'NIP' => '12345678901'
                ],

                [
                    'id' => '2', 'name' => 'Zakład Elektroniczny', 'street' => 'Kwiatowa 5', 'city' => 'Kraków', 'NIP' => '23456789012'
                ],

                [
                    'id' => '3', 'name' => 'Sklep Spożywczy', 'street' => 'Wiejska 2', 'city' => 'Gdańsk', 'NIP' => '34567890123'
                ],

                [
                    'id' => '4', 'name' => 'Meble Polskie', 'street' => 'Warszawska 15', 'city' => 'Wrocław', 'NIP' => '45678901234'
                ],

                [
                    'id' => '5', 'name' => 'Agencja Reklamowa', 'street' => 'Słoneczna 8', 'city' => 'Łódź', 'NIP' => '56789012345'
                ],

                [
                    'id' => '6', 'name' => 'Pracownia Architektoniczna', 'street' => 'Ogrodowa 12', 'city' => 'Poznań', 'NIP' => '67890123456'
                ],

                [
                    'id' => '7', 'name' => 'Restauracja', 'street' => 'Rynek 3', 'city' => 'Szczecin', 'NIP' => '78901234567'
                ],

                [
                    'id' => '8', 'name' => 'Salon Fryzjerski', 'street' => 'Mickiewicza 20', 'city' => 'Lublin', 'NIP' => '89012345678'
                ],

                [
                    'id' => '9', 'name' => 'Agencja Turystyczna', 'street' => 'Słowackiego 6', 'city' => 'Katowice', 'NIP' => '90123456789'
                ],

                [
                    'id' => '10', 'name' => 'Sklep Odzieżowy', 'street' => 'Główna 30', 'city' => 'Bydgoszcz', 'NIP' => '01234567890'
                ]
            ]
        );
    }
}
