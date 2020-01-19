<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Studio extends Model
{
    protected $fillable = ['studio_id', 'studio_by', 'studio_name', 'studio_details', 'studio_type', 
    						'min_booking', 'max_occp', 'past_clients', 'audio_samples', 
    						'pricing_per_hour', 'profile_photo', 'extra_photos'];
}
