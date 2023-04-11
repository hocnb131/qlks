<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
class Room extends Model
{
    use HasFactory;
    protected $table = 'room';
    protected $fillable = [
    'name',
    'thumbnail',
    'description',
    'thumbnailDescription',
    'price',
    'bed',
    'size',
    'capacity',
    'services',
    'status',
    ];
    public function roomdetail(): HasOne
    {
        return $this->hasOne(RoomDetail::class);
    }
}
