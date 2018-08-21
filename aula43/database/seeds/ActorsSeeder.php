<?php

use Illuminate\Database\Seeder;
use App\Actors;
use App\Movie;

class ActorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $actors = factory(Actors::class)->times(50)->create();
        $movies = factory(Movie::class)->times(50)->create();

        foreach ($movies as $movie){
            //Associamos o filme a 3 atores aleatórios
            $movie->atoresListado()->sync($actors->random(3));
        }
    }
}
