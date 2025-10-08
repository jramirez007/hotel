<?php

namespace Database\Seeders;

use App\Models\Room;
use App\Models\RoomType;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roomTypes = RoomType::all();
        
        if ($roomTypes->isEmpty()) {
            $this->command->warn('No room types found. Please run RoomTypeSeeder first.');
            return;
        }

        $viewTypes = ['Sea View', 'City View', 'Garden View', 'Mountain View', 'Pool View', 'Street View'];
        $statuses = ['available', 'occupied', 'maintenance', 'cleaning'];
        
        // Weight statuses - most rooms should be available
        $statusWeights = [
            'available' => 70,
            'occupied' => 20,
            'cleaning' => 8,
            'maintenance' => 2,
        ];

        $roomNumber = 101;

        foreach ($roomTypes as $index => $roomType) {
            // Generate 10-20 rooms per type
            $numberOfRooms = fake()->numberBetween(10, 20);
            
            // Assign rooms to floors based on room type
            $startFloor = ($index * 2) + 1;
            $endFloor = $startFloor + 1;

            for ($i = 0; $i < $numberOfRooms; $i++) {
                $floor = fake()->numberBetween($startFloor, $endFloor);
                
                // Determine status based on weights
                $rand = fake()->numberBetween(1, 100);
                $status = 'available';
                $cumulative = 0;
                foreach ($statusWeights as $statusKey => $weight) {
                    $cumulative += $weight;
                    if ($rand <= $cumulative) {
                        $status = $statusKey;
                        break;
                    }
                }

                Room::create([
                    'room_type_id' => $roomType->id,
                    'room_number' => (string) $roomNumber,
                    'floor' => $floor,
                    'status' => $status,
                    'view_type' => fake()->randomElement($viewTypes),
                    'is_smoking_allowed' => fake()->boolean(15), // Only 15% allow smoking
                    'notes' => fake()->optional(0.1)->sentence(),
                ]);

                $roomNumber++;
            }
        }

        $this->command->info('Rooms seeded successfully!');
    }
}
