<?php

namespace App\Containers\Song\UI\API\Controllers;

use App\Containers\Song\UI\API\Requests\CreateSongRequest;
use App\Containers\Song\UI\API\Requests\DeleteSongRequest;
use App\Containers\Song\UI\API\Requests\GetAllSongsRequest;
use App\Containers\Song\UI\API\Requests\FindSongByIdRequest;
use App\Containers\Song\UI\API\Requests\UpdateSongRequest;
use App\Containers\Song\UI\API\Transformers\SongTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\Song\UI\API\Controllers
 */
class Controller extends ApiController
{
    /**
     * @param CreateSongRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createSong(CreateSongRequest $request)
    {
        $song = Apiato::call('Song@CreateSongAction', [$request]);

        return $this->created($this->transform($song, SongTransformer::class));
    }

    /**
     * @param FindSongByIdRequest $request
     * @return array
     */
    public function findSongById(FindSongByIdRequest $request)
    {
        $song = Apiato::call('Song@FindSongByIdAction', [$request]);

        return $this->transform($song, SongTransformer::class);
    }

    /**
     * @param GetAllSongsRequest $request
     * @return array
     */
    public function getAllSongs(GetAllSongsRequest $request)
    {
        $songs = Apiato::call('Song@GetAllSongsAction', [$request]);

        return $this->transform($songs, SongTransformer::class);
    }

    /**
     * @param UpdateSongRequest $request
     * @return array
     */
    public function updateSong(UpdateSongRequest $request)
    {
        $song = Apiato::call('Song@UpdateSongAction', [$request]);

        return $this->transform($song, SongTransformer::class);
    }

    /**
     * @param DeleteSongRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteSong(DeleteSongRequest $request)
    {
        Apiato::call('Song@DeleteSongAction', [$request]);

        return $this->noContent();
    }
}
