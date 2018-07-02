<?php

namespace App\Containers\Song\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class GetAllSongsAction extends Action
{
    public function run(Request $request)
    {
        $songs = Apiato::call('Song@GetAllSongsTask');

        return $songs;
    }
}
