<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('locations')->insert([
            [
                'vehicle_id' => 1,
                'latitude' => -6.2088,
                'longitude' => 106.8456,
                'timestamp' => '2025-02-20 10:00:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'vehicle_id' => 2,
                'latitude' => -6.2146,
                'longitude' => 106.8451,
                'timestamp' => '2025-02-20 10:05:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
