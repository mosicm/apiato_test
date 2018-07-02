<?php

namespace App\Containers\Party\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class GetAllPartiesAction extends Action
{
    public function run(Request $request)
    {
        $parties = Apiato::call('Party@GetAllPartiesTask');

        return $parties;
    }
}
