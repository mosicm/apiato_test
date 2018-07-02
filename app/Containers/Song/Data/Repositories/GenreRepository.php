<?php

namespace App\Containers\Song\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class GenreRepository
 */
class GenreRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

}
