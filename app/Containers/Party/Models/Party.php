<?php

namespace App\Containers\Party\Models;

use App\Ship\Parents\Models\Model;

class Party extends Model
{
    protected $fillable = [
        'id',
        'name',
        'description',
        'capacity',
        'started_at',
        'ended_at',
        'music',
        'karaoke'
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
    protected $resourceKey = 'parties';

    public function songs(){
        return $this->belongsToMany(\App\Containers\Song\Models\Song::class, 'party_song', 'party_id', 'song_id')->withTimestamps();
    }
}
