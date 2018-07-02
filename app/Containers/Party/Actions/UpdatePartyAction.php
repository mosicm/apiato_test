<?php

namespace App\Containers\Party\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class UpdatePartyAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
          'capacity'
        ]);

        $party = Apiato::call('Party@UpdatePartyTask', [$request->id, $data]);

        return $party;
    }
}
