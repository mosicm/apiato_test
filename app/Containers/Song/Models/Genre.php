<?php

namespace App\Containers\Song\Models;

use App\Ship\Parents\Models\Model;

class Genre extends Model
{
    protected $fillable = [
        'id',
        'name'
    ];

    protected $attributes = [

    ];

    protected $hidden = [

    ];

    protected $casts = [

    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /**
     * A resource key to be used by the the JSON API Serializer responses.
     */
    protected $resourceKey = 'genres';

    public function songs(){
        return $this->hasMany('App\Containers\Song\Models\Song');
    }
}
