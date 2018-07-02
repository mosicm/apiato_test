<?php

namespace App\Containers\Party\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class PartyRepository
 */
class PartyRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

}
