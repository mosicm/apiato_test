<?php

namespace App\Containers\Song\Data\Seeders;

use App\Ship\Parents\Seeders\Seeder;
use App\Containers\Song\Models\Song;
use App\Containers\Song\Models\Genre;

class SongSeeder_2 extends Seeder
{
    public function run()
    {
        $genre_1 = Genre::find(1);
        $genre_2 = Genre::find(2);

        $song = new Song([
        	'artist' => 'Moby',
        	'track' => 'Natural Blues',
        	'link' => 'link',
        	'length' => 3
        ]);
        $genre_1->songs()->save($song);

        $song = new Song([
        	'artist' => 'Lera Lynn',
        	'track' => 'Lately',
        	'link' => 'link',
        	'length' => 5
        ]);
        $genre_2->songs()->save($song);

        $song = new Song([
        	'artist' => 'Toto',
        	'track' => 'Africa',
        	'link' => 'link',
        	'length' => 4
        ]);
        $genre_1->songs()->save($song);
        
        $song = new Song();
        $song->artist = 'Lera Lynn';
        $song->track = 'Bobby Baby';
        $song->link = 'bobby_baby';
        $song->length = 4;
        $song->genre_id = $genre_2->id;
        $song->save();

        $song = new Song();
        $song->artist = 'Bon Jovi';
        $song->track = 'Runnaway';
        $song->link = 'runnaway';
        $song->length = 4.5;
        $song->genre_id = $genre_1->id;
        $song->save();

        $song = new Song();
        $song->artist = 'Nirvana';
        $song->track = 'Come as you are';
        $song->link = 'come_as_you_are';
        $song->length = 5.5;
        $song->genre_id = $genre_2->id;
        $song->save();

        $song = new Song();
        $song->artist = 'Lana Del Ray';
        $song->track = 'Summer Wine';
        $song->link = 'summer_wine';
        $song->length = 4;
        $song->genre_id = $genre_1->id;
        $song->save();

        $song = new Song();
        $song->artist = 'Black';
        $song->track = 'Wonderfull Life';
        $song->link = 'wonderfull_life';
        $song->length = 5.5;
        $song->genre_id = $genre_2->id;
        $song->save();
    }
}
