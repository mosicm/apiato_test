<?php

namespace App\Containers\Song\Data\Seeders;

use App\Ship\Parents\Seeders\Seeder;
use App\Containers\Song\Models\Genre;

class GenreSeeder_1 extends Seeder
{
    public function run()
    {
        $genre = new Genre();
        $genre->name = 'pop';
        $genre->save();

        $genre = new Genre();
        $genre->name = 'rock';
        $genre->save();
    }
}
