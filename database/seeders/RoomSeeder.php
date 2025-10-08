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
            $this->command->error('No room types found. Please run RoomTypeSeeder first.');
            return;
        }

        $roomNumber = 101;
        
        foreach ($roomTypes as $roomType) {
            // Generate 10-20 rooms for each room type
            $numberOfRooms = fake()->numberBetween(10, 20);
            
            for ($i = 0; $i < $numberOfRooms; $i++) {
                // Calculate floor based on room number (10 rooms per floor)
                $floor = (int) floor($roomNumber / 100);
                
                // Most rooms should be available
                $status = fake()->randomElement([
                    'available',
                    'available',
                    'available',
                    'available',
                    'available',
                    'occupied',
                    'occupied',
                    'maintenance',
                    'cleaning',
                ]);

                Room::create([
                    'room_type_id' => $roomType->id,
                    'room_number' => (string) $roomNumber,
                    'floor' => $floor,
                    'status' => $status,
                ]);

                $roomNumber++;
                
                // Skip to next hundred when reaching x10 (e.g., 110 -> 201, 210 -> 301)
                if ($roomNumber % 100 === 11) {
                    $roomNumber = ((int) floor($roomNumber / 100) + 1) * 100 + 1;
                }
            }
        }

        $this->command->info('Created ' . Room::count() . ' rooms across ' . $roomTypes->count() . ' room types.');
    }
}
