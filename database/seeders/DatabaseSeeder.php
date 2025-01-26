<?php

namespace Database\Seeders;

use App\Models\ParkingSlot;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Vehicle;
use App\Models\Warehouse;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Seed Warehouses
        $warehouse = Warehouse::create([
            'name' => 'Honda Calamba',
            'description' => '',
            'capacity' => 50
        ]);



        $vehicle = Vehicle::create([
            'plate_number' => 'XYZ-1234',
            'model' => 'Toyota Camry',
            'brand' => 'toyota',
        ]);

        // Seed Parking Slots
        for ($i = 1; $i <= 130; $i++)
        {
            ParkingSlot::create([
                'warehouse_id' => $warehouse->id,
                'slot_number' => $i,
                'status' => 'available'
            ]);
        }
    }
}
