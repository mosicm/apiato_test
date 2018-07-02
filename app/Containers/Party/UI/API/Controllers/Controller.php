<?php

namespace App\Containers\Party\UI\API\Controllers;

use App\Containers\Party\UI\API\Requests\CreatePartyRequest;
use App\Containers\Party\UI\API\Requests\DeletePartyRequest;
use App\Containers\Party\UI\API\Requests\GetAllPartiesRequest;
use App\Containers\Party\UI\API\Requests\FindPartyByIdRequest;
use App\Containers\Party\UI\API\Requests\UpdatePartyRequest;
use App\Containers\Party\UI\API\Transformers\PartyTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\Party\UI\API\Controllers
 */
class Controller extends ApiController
{
    /**
     * @param CreatePartyRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createParty(CreatePartyRequest $request)
    {
        $party = Apiato::call('Party@CreatePartyAction', [$request]);
        return $party;
        //return $this->created($this->transform($party, PartyTransformer::class));
    }

    /**
     * @param FindPartyByIdRequest $request
     * @return array
     */
    public function findPartyById(FindPartyByIdRequest $request)
    {
        $party = Apiato::call('Party@FindPartyByIdAction', [$request]);

        return $this->transform($party, PartyTransformer::class);
    }

    /**
     * @param GetAllPartiesRequest $request
     * @return array
     */
    public function getAllParties(GetAllPartiesRequest $request)
    {
        $parties = Apiato::call('Party@GetAllPartiesAction', [$request]);

        return $this->transform($parties, PartyTransformer::class);
    }

    /**
     * @param UpdatePartyRequest $request
     * @return array
     */
    public function updateParty(UpdatePartyRequest $request)
    {
        $party = Apiato::call('Party@UpdatePartyAction', [$request]);

        return $this->transform($party, PartyTransformer::class);
    }

    /**
     * @param DeletePartyRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteParty(DeletePartyRequest $request)
    {
        Apiato::call('Party@DeletePartyAction', [$request]);

        return $this->noContent();
    }
}
