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
        $roomTypes = ['Standard', 'Deluxe', 'Executive', 'Suite', 'Presidential Suite', 'Family Room'];
        $bedTypes = ['Single', 'Twin', 'Double', 'Queen', 'King'];
        
        return [
            'name' => fake()->unique()->randomElement($roomTypes),
            'description' => fake()->paragraph(3),
            'price_per_night' => fake()->randomFloat(2, 50, 500),
            'capacity' => fake()->numberBetween(1, 6),
            'number_of_beds' => fake()->numberBetween(1, 3),
            'bed_type' => fake()->randomElement($bedTypes),
            'size_sqm' => fake()->randomFloat(2, 20, 100),
            'amenities' => [
                'Wi-Fi' => fake()->boolean(90),
                'Air Conditioning' => fake()->boolean(95),
                'TV' => fake()->boolean(100),
                'Mini Bar' => fake()->boolean(70),
                'Safe' => fake()->boolean(80),
                'Balcony' => fake()->boolean(50),
                'Bathtub' => fake()->boolean(60),
                'Coffee Maker' => fake()->boolean(75),
            ],
        ];
    }
}
