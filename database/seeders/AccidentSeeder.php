<?php

namespace Database\Seeders;

use App\Models\Accident;
use App\Models\Vehicle;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AccidentSeeder extends Seeder
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
            Accident::create([
                'vehicle_id' => $vehicle->id,
                'accident_date' => fake()->dateTimeBetween('-5 years', 'now'),
                'description' => fake()->sentence(),
                'cost' => fake()->randomFloat(2, 1000, 10000),
                'status' => fake()->randomElement(['resolved', 'under investigation']),
                'notes' => fake()->sentence(),
            ]);
        }
    }
}
