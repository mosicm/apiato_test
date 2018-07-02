<?php

namespace App\Containers\Party\UI\API\Transformers;

use App\Containers\Party\Models\Party;
use App\Ship\Parents\Transformers\Transformer;

class PartyTransformer extends Transformer
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
     * @param Party $entity
     *
     * @return array
     */
    public function transform(Party $entity)
    {
        $response = [
            'object' => 'Party',
            'id' => $entity->getHashedKey(),
            'name' => $entity->name,
            'description' => $entity->description,
            'capacity' => $entity->capacity,
            'started_at' => $entity->started_at,
            'ended_at' => $entity->ended_at,
            'music' => $entity->music,
            'karaoke' => $entity->karaoke,
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
