<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Model;

class WorldDestination extends Model
{
    protected $guarded = ['id'];

    public function CountryItinerary(){
        return $this->hasMany('CountryItinerary:class', 'id');
    }
}
