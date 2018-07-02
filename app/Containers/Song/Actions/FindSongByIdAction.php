<?php

namespace App\Containers\Song\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class FindSongByIdAction extends Action
{
    public function run(Request $request)
    {
        $song = Apiato::call('Song@FindSongByIdTask', [$request->id]);

        return $song;
    }
}
