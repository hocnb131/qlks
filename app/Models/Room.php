<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $table = 'room';
    protected $fillable = [
    'name',
    'thumbnail',
    'thumbnailDescription',
    'price',
    'bed',
    'size',
    'capacity',
    'services',
    'status',
    ];
}
