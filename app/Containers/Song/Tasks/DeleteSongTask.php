<?php

namespace App\Containers\Song\Tasks;

use App\Containers\Song\Data\Repositories\SongRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class DeleteSongTask extends Task
{

    private $repository;

    public function __construct(SongRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id)
    {
        try {
            return $this->repository->delete($id);
        }
        catch (Exception $exception) {
            throw new DeleteResourceFailedException();
        }
    }
}
