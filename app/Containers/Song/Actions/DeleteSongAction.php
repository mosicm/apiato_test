<?php

namespace App\Containers\Song\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class DeleteSongAction extends Action
{
    public function run(Request $request)
    {
        return Apiato::call('Song@DeleteSongTask', [$request->id]);
    }
}
