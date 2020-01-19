<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hour extends Model
{
	protected $table = 'hours';
	
    protected $fillable = ['hour_id', 'studio_id', 'studio_opening', 'studio_closing'];
}
