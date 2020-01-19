<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = ['location_id', 'studio_id', 'studio_address', 'studio_city', 'studio_country'];
}
