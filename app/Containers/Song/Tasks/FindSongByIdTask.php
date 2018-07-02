<?php

namespace App\Containers\Song\Tasks;

use App\Containers\Song\Data\Repositories\SongRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class FindSongByIdTask extends Task
{

    private $repository;

    public function __construct(SongRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id)
    {
        try {
            return $this->repository->find($id);
        }
        catch (Exception $exception) {
            throw new NotFoundException();
        }
    }
}
