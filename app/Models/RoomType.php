<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price_per_night',
        'capacity',
        'bed_type',
        'size',
        'amenities',
    ];

    protected $casts = [
        'price_per_night' => 'decimal:2',
        'capacity' => 'integer',
        'size' => 'decimal:2',
        'amenities' => 'array',
    ];

    /**
     * Get the rooms for this room type.
     */
    public function rooms()
    {
        return $this->hasMany(Room::class);
    }
}
