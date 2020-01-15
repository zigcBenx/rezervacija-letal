<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    protected $fillable = [
    	'time_takeoff',
    	'time_landing',
    	'number_of_flights',
    	'flight_from',
    	'flight_to',
    	'opombe',
    	'plane_id',
    	'pilot_id',
    ];
}
