<?php

namespace App\Containers\Party\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class DeletePartyAction extends Action
{
    public function run(Request $request)
    {
        return Apiato::call('Party@DeletePartyTask', [$request->id]);
    }
}
