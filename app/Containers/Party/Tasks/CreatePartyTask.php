<?php

namespace App\Containers\Party\Tasks;

use App\Containers\Party\Data\Repositories\PartyRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreatePartyTask extends Task
{

    private $repository;

    public function __construct(PartyRepository $repository)
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
