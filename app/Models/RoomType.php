<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class RoomType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price_per_night',
        'capacity',
        'number_of_beds',
        'bed_type',
        'size_sqm',
        'amenities',
    ];

    protected $casts = [
        'amenities' => 'array',
        'price_per_night' => 'decimal:2',
        'size_sqm' => 'decimal:2',
    ];

    /**
     * Get the rooms for the room type.
     */
    public function rooms(): HasMany
    {
        return $this->hasMany(Room::class);
    }
}
