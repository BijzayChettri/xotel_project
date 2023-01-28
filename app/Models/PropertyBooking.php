<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyBooking extends Model
{
    use HasFactory;
    protected $fillable = [
        'custName',
        'custEmail',
        'custPhone',
        'propertyName',
        'propertyAddress',
        'propertyPrice',
        'Bookingstatus',
        'status'
    ];
    public function bookingLeadStatus()
    {
        return $this->hasMany(BookingLeadStatus::class);
    }
}
