<?php

use Illuminate\Database\Seeder;
use App\Directors;
use App\Movie;

//sempre q for usar o faker, usar como base -> https://github.com/fzaninotto/Faker

class DirectorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // criando 10 diretores
        $directors = factory(Directors::class)->times(10)->create();

        foreach ($directors as $director){
            // Criamos 5 filmes para cada diretor
            factory(Movie::class)->times(5)->create([
                'director_id' => $director->id,
            ]);
        }
    }
}
