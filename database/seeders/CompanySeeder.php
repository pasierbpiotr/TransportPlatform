<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Forwarder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::withoutForeignKeyConstraints(function() {
            Forwarder::truncate();
            Company::truncate();
        });

        Company::insert(
            [
                [
                    'id' => '1', 'name' => 'Firma Budowlana', 'street' => 'Piękna 10', 'city' => 'Warszawa', 'NIP' => '12345678901', 'picture' => 'seed_pictures/budowlana.png',
                ],

                [
                    'id' => '2', 'name' => 'Zakład Elektroniczny', 'street' => 'Kwiatowa 5', 'city' => 'Kraków', 'NIP' => '23456789012', 'picture' => 'seed_pictures/elektroniczny.png'
                ],

                [
                    'id' => '3', 'name' => 'Sklep Spożywczy', 'street' => 'Wiejska 2', 'city' => 'Gdańsk', 'NIP' => '34567890123', 'picture' => 'seed_pictures/spozywczy.png'
                ],

                [
                    'id' => '4', 'name' => 'Meble Polskie', 'street' => 'Warszawska 15', 'city' => 'Wrocław', 'NIP' => '45678901234', 'picture' => 'seed_pictures/meble.png'
                ],

                [
                    'id' => '5', 'name' => 'Agencja Reklamowa', 'street' => 'Słoneczna 8', 'city' => 'Łódź', 'NIP' => '56789012345', 'picture' => 'seed_pictures/reklamowa.png'
                ],

                [
                    'id' => '6', 'name' => 'Pracownia Architektoniczna', 'street' => 'Ogrodowa 12', 'city' => 'Poznań', 'NIP' => '67890123456', 'picture' => 'seed_pictures/architektoniczna.png'
                ],

                [
                    'id' => '7', 'name' => 'Restauracja', 'street' => 'Rynek 3', 'city' => 'Szczecin', 'NIP' => '78901234567', 'picture' => 'seed_pictures/restauracja.png'
                ],

                [
                    'id' => '8', 'name' => 'Salon Fryzjerski', 'street' => 'Mickiewicza 20', 'city' => 'Lublin', 'NIP' => '89012345678', 'picture' => 'seed_pictures/fryzjer.png'
                ],

                [
                    'id' => '9', 'name' => 'Agencja Turystyczna', 'street' => 'Słowackiego 6', 'city' => 'Katowice', 'NIP' => '90123456789', 'picture' => 'seed_pictures/turystyczny.png'
                ],

                [
                    'id' => '10', 'name' => 'Sklep Odzieżowy', 'street' => 'Główna 30', 'city' => 'Bydgoszcz', 'NIP' => '01234567890', 'picture' => 'seed_pictures/odziezowy.png'
                ]
            ]
        );
    }
}
