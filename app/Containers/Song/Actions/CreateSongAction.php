<?php

namespace App\Containers\Song\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class CreateSongAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            'artist',
            'track',
            'link',
            'length',
            'genre_id'
        ]);

        $song = Apiato::call('Song@CreateSongTask', [$data]);

        return $song;
    }
}
