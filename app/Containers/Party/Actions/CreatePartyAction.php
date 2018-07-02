<?php

namespace App\Containers\Party\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class CreatePartyAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            'name',
            'description',
            'capacity',
            'started_at',
            'ended_at',
            'music',
            'karaoke'
        ]);

        $party = Apiato::call('Party@CreatePartyTask', [$data]);
        //Apiato::call('Party@CreatePlaylistTask', [$party]);
           if ($party->music == 1) {
            $previous_party = Apiato::call('Party@CreatePlaylistTask', [$party]);
            return $previous_party;
        }
        return $party;
    }
}
