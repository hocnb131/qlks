<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Province extends Model
{
    use HasFactory;
    // use SoftDeletes;
    protected $table = 'province';
    protected $fillable = [
    'name',
    'thumbnail',
    'thumbnailDescription',
    'description',
    'status'
    ];

    // protected $attributes = [
    //     'status' => 0
    //  ];
    public function branchs(): HasMany
    {
        return $this->hasMany(Branch::class,);
    }
}
