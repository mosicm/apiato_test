<?php

namespace App\Containers\Song\Tasks;

use App\Containers\Song\Data\Repositories\SongRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllSongsTask extends Task
{

    private $repository;

    public function __construct(SongRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
