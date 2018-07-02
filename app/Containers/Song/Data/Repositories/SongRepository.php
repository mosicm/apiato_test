<?php

namespace App\Containers\Song\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class SongRepository
 */
class SongRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

}
