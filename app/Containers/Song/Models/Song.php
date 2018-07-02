<?php

namespace App\Containers\Song\Models;

use App\Ship\Parents\Models\Model;

class Song extends Model
{
    protected $fillable = [
        'id',
        'artist',
        'track',
        'link',
        'length',
        'genre_id'
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
    protected $resourceKey = 'songs';

    public function genre(){
        return $this->belongsTo('App\Containers\Song\Models\Genre');
    }

    public function parties(){
        return $this->belongsToMany(\App\Containers\Party\Models\Party::class, 'party_song', 'song_id', 'party_id')->withTimestamps();
    }
}
