<?php

namespace Database\Seeders;

use App\Models\Driver;
use App\Models\Forwarder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class ForwarderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::withoutForeignKeyConstraints(function() {
            Driver::truncate();
            Forwarder::truncate();
        });

        Forwarder::insert(
            [
                [
                    'id' => '1', 'name' => 'Jan', 'surname' => 'Kowalski', 'user_id' => '2', 'company_id' => '1'
                ],

                [
                    'id' => '2', 'name' => 'Anna', 'surname' => 'Nowak', 'user_id' => '3', 'company_id' => '2'
                ],

                [
                    'id' => '3', 'name' => 'Piotr', 'surname' => 'Wiśniewski', 'user_id' => '4', 'company_id' => '3'
                ]
            ]
        );
    }
}
