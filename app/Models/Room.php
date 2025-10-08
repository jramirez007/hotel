<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_type_id',
        'room_number',
        'floor',
        'status',
        'is_smoking',
    ];

    protected $casts = [
        'room_type_id' => 'integer',
        'floor' => 'integer',
        'is_smoking' => 'boolean',
    ];

    /**
     * Get the room type that owns the room.
     */
    public function roomType()
    {
        return $this->belongsTo(RoomType::class);
    }
}
