<?php

namespace Database\Seeders;

use App\Models\RoomType;
use Illuminate\Database\Seeder;

class RoomTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roomTypes = [
            [
                'name' => 'Standard Room',
                'description' => 'A comfortable room with essential amenities, perfect for budget-conscious travelers. Features a cozy atmosphere with modern furnishings.',
                'price_per_night' => 89.99,
                'capacity' => 2,
                'bed_type' => 'Double',
                'size' => 25.00,
                'amenities' => [
                    'Wi-Fi',
                    'Air Conditioning',
                    'Flat-screen TV',
                    'Private Bathroom',
                    'Desk',
                    'Coffee Maker',
                ],
            ],
            [
                'name' => 'Deluxe Room',
                'description' => 'An upgraded room offering more space and enhanced amenities. Ideal for guests seeking extra comfort during their stay.',
                'price_per_night' => 129.99,
                'capacity' => 2,
                'bed_type' => 'Queen',
                'size' => 35.00,
                'amenities' => [
                    'High-Speed Wi-Fi',
                    'Air Conditioning',
                    'Smart TV',
                    'Mini Bar',
                    'Private Bathroom',
                    'Work Desk',
                    'Coffee Maker',
                    'In-room Safe',
                    'Bathrobe & Slippers',
                ],
            ],
            [
                'name' => 'Executive Suite',
                'description' => 'A spacious suite with separate living and sleeping areas, designed for business travelers and those who appreciate luxury and space.',
                'price_per_night' => 199.99,
                'capacity' => 3,
                'bed_type' => 'King',
                'size' => 50.00,
                'amenities' => [
                    'High-Speed Wi-Fi',
                    'Climate Control',
                    'Smart TV',
                    'Mini Bar',
                    'Private Bathroom with Jacuzzi',
                    'Work Desk',
                    'Nespresso Machine',
                    'In-room Safe',
                    'Bathrobe & Slippers',
                    'Sofa',
                    'Dining Area',
                ],
            ],
            [
                'name' => 'Presidential Suite',
                'description' => 'The pinnacle of luxury accommodation featuring premium amenities, stunning views, and unparalleled comfort. Perfect for VIP guests.',
                'price_per_night' => 399.99,
                'capacity' => 4,
                'bed_type' => 'King',
                'size' => 80.00,
                'amenities' => [
                    'Premium Wi-Fi',
                    'Climate Control',
                    'Multiple Smart TVs',
                    'Full Bar',
                    'Master Bathroom with Jacuzzi & Rain Shower',
                    'Work Desk',
                    'Nespresso Machine',
                    'Electronic Safe',
                    'Premium Bathrobes & Slippers',
                    'Living Room',
                    'Dining Area',
                    'Balcony',
                    'Butler Service',
                    'Kitchen',
                ],
            ],
            [
                'name' => 'Family Room',
                'description' => 'A spacious room designed for families, featuring multiple beds and ample space for children. Family-friendly amenities included.',
                'price_per_night' => 169.99,
                'capacity' => 5,
                'bed_type' => 'Twin',
                'size' => 45.00,
                'amenities' => [
                    'High-Speed Wi-Fi',
                    'Air Conditioning',
                    'Smart TV',
                    'Mini Refrigerator',
                    'Private Bathroom',
                    'Coffee Maker',
                    'In-room Safe',
                    'Extra Beds',
                    'Games & Entertainment',
                    'Child-friendly Amenities',
                ],
            ],
            [
                'name' => 'Junior Suite',
                'description' => 'A well-appointed suite offering a balance of space and affordability. Features an open-plan layout with distinct living space.',
                'price_per_night' => 159.99,
                'capacity' => 2,
                'bed_type' => 'Queen',
                'size' => 40.00,
                'amenities' => [
                    'High-Speed Wi-Fi',
                    'Air Conditioning',
                    'Smart TV',
                    'Mini Bar',
                    'Private Bathroom',
                    'Work Desk',
                    'Coffee Maker',
                    'In-room Safe',
                    'Bathrobe & Slippers',
                    'Sitting Area',
                ],
            ],
        ];

        foreach ($roomTypes as $roomType) {
            RoomType::create($roomType);
        }
    }
}
