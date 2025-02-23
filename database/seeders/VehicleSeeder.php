<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('vehicles')->insert([
            [
                'license_plate' => 'B 1234 XYZ',
                'name' => 'Truck A',
                'model' => 'A',
                'fuel_capacity' => 200,
                'last_service_date' => '2025-01-15',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'license_plate' => 'B 5678 ABC',
                'name' => 'Truck B',
                'model' => 'B',
                'fuel_capacity' => 250,
                'last_service_date' => '2025-02-10',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
