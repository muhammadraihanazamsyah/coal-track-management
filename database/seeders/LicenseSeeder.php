<?php

namespace Database\Seeders;

use App\Models\License;
use App\Models\Vehicle;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LicenseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vehicles = Vehicle::all();

        if ($vehicles->isEmpty()) {
            $this->command->warn('No vehicles found. Please seed vehicles first.');
            return;
        }

        foreach ($vehicles as $vehicle) {
            License::create([
                'vehicle_id' => $vehicle->id,
                'document_type' => fake()->randomElement(['STNK', 'BPKB', 'Asuransi']),
                'issue_date' => fake()->dateTimeBetween('-5 years', 'now'),
                'expiry_date' => fake()->dateTimeBetween('now', '+5 years'),
                'status' => fake()->randomElement(['active', 'inactive']),
                'notes' => fake()->sentence(),
            ]);
        }
    }
}
