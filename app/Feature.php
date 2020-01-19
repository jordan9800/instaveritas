<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    protected $fillable = ['feature_id', 'studio_id', 'studio_amenities', 'studio_equipments', 
    						'studio_rules'];
}
