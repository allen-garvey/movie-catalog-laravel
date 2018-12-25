<?php

use Illuminate\Database\Seeder;
use App\Genre;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genreNames = [
            'Action',
            'Anime',
            'Comedy',
            'Drama',
            'Family',
            'Horror',
            'Musical',

        ];
        foreach($genreNames as $genreName){
            Genre::create([
                'name' => $genreName,
            ]);
        }
    }
}
