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
        $roomTypes = [
            'Standard Room' => [
                'description' => 'A comfortable standard room with essential amenities',
                'price' => fake()->randomFloat(2, 50, 100),
                'capacity' => 2,
                'amenities' => ['Wi-Fi', 'TV', 'Air Conditioning', 'Private Bathroom'],
            ],
            'Deluxe Room' => [
                'description' => 'Spacious deluxe room with premium amenities and city view',
                'price' => fake()->randomFloat(2, 100, 180),
                'capacity' => 2,
                'amenities' => ['Wi-Fi', 'Smart TV', 'Air Conditioning', 'Private Bathroom', 'Mini Bar', 'City View'],
            ],
            'Suite' => [
                'description' => 'Luxurious suite with separate living area and premium facilities',
                'price' => fake()->randomFloat(2, 200, 350),
                'capacity' => 4,
                'amenities' => ['Wi-Fi', 'Smart TV', 'Air Conditioning', 'Private Bathroom', 'Mini Bar', 'Balcony', 'Living Area', 'Ocean View'],
            ],
            'Family Room' => [
                'description' => 'Large family room with multiple beds and kid-friendly amenities',
                'price' => fake()->randomFloat(2, 120, 200),
                'capacity' => 4,
                'amenities' => ['Wi-Fi', 'TV', 'Air Conditioning', 'Private Bathroom', 'Mini Fridge', 'Extra Beds'],
            ],
            'Executive Suite' => [
                'description' => 'Premium executive suite with office space and luxury amenities',
                'price' => fake()->randomFloat(2, 300, 500),
                'capacity' => 2,
                'amenities' => ['Wi-Fi', 'Smart TV', 'Air Conditioning', 'Private Bathroom', 'Mini Bar', 'Jacuzzi', 'Office Desk', 'Premium View'],
            ],
        ];

        $type = fake()->randomElement(array_keys($roomTypes));
        $details = $roomTypes[$type];

        return [
            'name' => $type,
            'description' => $details['description'],
            'price_per_night' => $details['price'],
            'capacity' => $details['capacity'],
            'amenities' => $details['amenities'],
        ];
    }
}
