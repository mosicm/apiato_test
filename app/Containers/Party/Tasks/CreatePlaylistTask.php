<?php

namespace App\Containers\Party\Tasks;

use App\Containers\Party\Data\Repositories\PartyRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;
use App\Containers\Party\Models\Party;
use App\Containers\Song\Models\Song;
class CreatePlaylistTask extends Task
{

   private $repository;

    public function __construct(PartyRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($party)
    {
        try {
        	// $songs = \App\Containers\Song\Models\Song::all();
        	// foreach($songs as $song){
        	// 	$party->songs()->attach($song->id);	
        	// }
           $previous_party = Party::where('music', 1)
                ->orderBy('started_at', 'desc')
                ->where('started_at', '<', $party->started_at)
                ->first();
                $new_party_songs = Song::inRandomOrder()->get();
            if ($previous_party) {
                //return $previous_party;
                $previous_party_songs = $previous_party->songs();
                $new_party_songs = $this->checkRepetition($previous_party_songs, $new_party_songs);
            }
            
            
           // return $new_party_songs;
            
        $start = \Carbon\Carbon::parse($party->started_at);
        $end = \Carbon\Carbon::parse($party->ended_at);
        $total_duration = $start->diffInMinutes($end);
        $duration = 0;
        while($duration < $total_duration){
            foreach($new_party_songs as $song){
                if($duration > $total_duration) break;
                $party->songs()->attach($song->id);
                $duration += $song->length; 
            }
       }
        return $duration;
            
        }
        catch (Exception $exception) {
            throw new CreateResourceFailedException();
        }
    }

     public function fillPlaylist($songs){

    }

     public function checkRepetition($previous, $new)
    {
        for ($i = 0; $i < count($previous) - 1; $i++) {
            for ($j = 0; $j < count($new) - 1; $j++) {
                if ((($previous[$i]->id == $new[$j]->id) && ($previous[$i + 1]->id == $new[$j + 1]->id)) || (($previous[$i]->id == $new[$j + 1]->id) && ($previous[$i + 1]->id == $new[$j]->id))) {
                    if (($j + 1) == count($new) - 1) {
                        $current = $new[$j + 1];
                        $new[$j + 1] = $new[0];
                        $new[0] = $current;
                    } else {
                        $current = $new[$j + 1];
                        $new[$j + 1] = $new[$j + 2];
                        $new[$j + 2] = $current;
                        if (($new[$j + 1]->id == $previous[$i - 1]->id) && (($i - 1) >= 0)) {
                            if(($j) == 0){
                                $current = $new[$j];
                                $new[$j] = $new[count($new) - 1];
                                $new[count($new) - 1] = $current;
                            }else{
                                $current = $new[$j];
                                $new[$j] = $new[$j - 1];
                                $new[$j - 1] = $current;
                            }
                            $i = 0;
                        }
                    }
                }
            }
        }

        return $new;
    }

}
