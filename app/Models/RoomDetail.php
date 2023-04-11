<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class RoomDetail extends Model
{
    use HasFactory;
    protected $table = 'roomdetail';
    protected $fillable = [
    'name',
    'thumbnail',
    'thumbnailDescription',
    'description',
    'price',
    'bed',
    'size',
    'capacity',
    'services',
    'ngaydat',
    'ngaytra',
    'room_id'
    ];
    public function room(): BelongsTo{
        // return $this->belongsTo(Room::class,'room_id');
        return $this->belongsTo(Room::class);
    }
}
