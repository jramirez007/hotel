<?php

namespace Database\Factories;

use App\Models\Room;
use App\Models\RoomType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    protected $model = Room::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'room_type_id' => RoomType::factory(),
            'room_number' => fake()->unique()->numberBetween(100, 999),
            'floor' => fake()->numberBetween(1, 10),
            'is_available' => fake()->boolean(90), // 90% chance of being available
        ];
    }

    /**
     * Indicate that the room is available.
     */
    public function available(): static
    {
        return $this->state(fn(array $attributes) => [
            'is_available' => true,
        ]);
    }

    /**
     * Indicate that the room is not available.
     */
    public function unavailable(): static
    {
        return $this->state(fn(array $attributes) => [
            'is_available' => false,
        ]);
    }
}
