<?php

namespace App\Containers\Song\Tasks;

use App\Containers\Song\Data\Repositories\SongRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateSongTask extends Task
{

    private $repository;

    public function __construct(SongRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(array $data)
    {
        try {
            return $this->repository->create($data);
        }
        catch (Exception $exception) {
            throw new CreateResourceFailedException();
        }
    }
}
