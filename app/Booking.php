<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = ['booking_id', 'studio_id', 'booking_date', 'start_time', 'end_time', 
    						'total_price', 'booked_by', 'booking_status'];
}
