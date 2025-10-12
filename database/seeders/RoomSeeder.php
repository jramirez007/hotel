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

        // Define hotel structure: 5 floors, 10 rooms per floor
        $floors = 5;
        $roomsPerFloor = 10;

        $roomCounter = 0;
        $totalRooms = $floors * $roomsPerFloor;

        for ($floor = 1; $floor <= $floors; $floor++) {
            for ($roomOnFloor = 1; $roomOnFloor <= $roomsPerFloor; $roomOnFloor++) {
                // Room number: first digit is floor, next two digits are room number on that floor
                // e.g., Floor 1: 101, 102, ..., 110; Floor 2: 201, 202, ..., 210
                $roomNumber = ($floor * 100) + $roomOnFloor;

                // Assign random room type
                $randomRoomType = $roomTypes->random();

                // 90% of rooms should be available
                $isAvailable = $roomCounter < ($totalRooms * 0.9);

                Room::create([
                    'room_type_id' => $randomRoomType->id,
                    'room_number' => (string) $roomNumber,
                    'floor' => $floor,
                    'is_available' => $isAvailable,
                ]);

                $roomCounter++;
            }
        }

        $this->command->info('Rooms created successfully!');
        $this->command->info("Total rooms: {$totalRooms}");
        $this->command->info("Available rooms: " . ($totalRooms * 0.9));
        $this->command->info("Unavailable rooms: " . ($totalRooms * 0.1));
    }
}
