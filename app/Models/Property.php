<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'type',
        'price',
        'owner_name',
        'phone',
        'email',
        'address',
        'pin',
        'latlng',
        'description',
        'status'
    ];
    public function amenities()
    {
        return $this->hasMany(PropertyAmenity::class);
    }
    public function images()
    {
        return $this->hasMany(PropertyImage::class);
    }
}
