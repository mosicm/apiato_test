<?php

namespace App\Containers\Party\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class FindPartyByIdAction extends Action
{
    public function run(Request $request)
    {
        $party = Apiato::call('Party@FindPartyByIdTask', [$request->id]);

        return $party;
    }
}
