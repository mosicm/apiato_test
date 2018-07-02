<?php

namespace App\Containers\Party\Tasks;

use App\Containers\Party\Data\Repositories\PartyRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class FindPartyByIdTask extends Task
{

    private $repository;

    public function __construct(PartyRepository $repository)
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
