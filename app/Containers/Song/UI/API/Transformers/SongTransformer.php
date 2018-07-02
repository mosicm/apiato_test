<?php

namespace App\Containers\Song\UI\API\Transformers;

use App\Containers\Song\Models\Song;
use App\Ship\Parents\Transformers\Transformer;
use App\Containers\Song\Models\Genre;

class SongTransformer extends Transformer
{
    /**
     * @var  array
     */
    protected $defaultIncludes = [

    ];

    /**
     * @var  array
     */
    protected $availableIncludes = [

    ];

    /**
     * @param Song $entity
     *
     * @return array
     */
    public function transform(Song $entity)
    {
        $response = [
            'object' => 'Song',
            'id' => $entity->getHashedKey(),
            'artist' => $entity->artist,
            'track' => $entity->track,
            'link' => $entity->link,
            'length' => $entity->length,
            'genre' => Genre::where('id', $entity->genre_id)->first()->name,
            //'genres' => \App\Containers\Song\Models\Genre::all(),
            'created_at' => $entity->created_at,
            'updated_at' => $entity->updated_at,

        ];

        $response = $this->ifAdmin([
            'real_id'    => $entity->id,
            // 'deleted_at' => $entity->deleted_at,
        ], $response);

        return $response;
    }
}
