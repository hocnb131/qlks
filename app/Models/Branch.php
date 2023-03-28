<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Branch extends Model
{
    use HasFactory;
    protected $table = 'branch';
    protected $fillable = [
    'name',
    'email',
    'address',
    'phoneNumber',
    'description',
    'thumbnail',
    'thumbnailDescription',
    'status',
    'province_id'
    ];
    public function province(): BelongsTo{
        return $this->belongsTo(Province::class,'province_id');
    }
}
