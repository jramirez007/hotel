<?php

namespace Database\Factories;

use App\Models\RoomType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RoomType>
 */
class RoomTypeFactory extends Factory
{
    protected $model = RoomType::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $bedTypes = ['Single', 'Double', 'Queen', 'King', 'Twin'];
        $roomTypeNames = ['Standard', 'Deluxe', 'Suite', 'Executive Suite', 'Presidential Suite', 'Family Room', 'Junior Suite'];

        return [
            'name' => fake()->randomElement($roomTypeNames),
            'description' => fake()->paragraph(3),
            'price_per_night' => fake()->randomFloat(2, 80, 500),
            'capacity' => fake()->numberBetween(1, 6),
            'bed_type' => fake()->randomElement($bedTypes),
            'size' => fake()->randomFloat(2, 20, 100),
            'amenities' => [
                fake()->randomElement(['Wi-Fi', 'High-Speed Internet', 'Wireless Internet']),
                fake()->randomElement(['Air Conditioning', 'Climate Control', 'Central Heating']),
                fake()->randomElement(['TV', 'Flat-screen TV', 'Smart TV', 'Cable TV']),
                fake()->randomElement(['Mini Bar', 'Refrigerator', 'Coffee Maker']),
                fake()->randomElement(['Safe', 'In-room Safe', 'Electronic Safe']),
            ],
        ];
    }
}
