<?php

use Illuminate\Database\Seeder;
use App\Genres;

class GeneroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $genero = Genres::create(['name' => 'Genero 1', 'ranking' => 20]);
        // $genero->active = true;
        // $genero->save();

        // $genero = Genres::create(['name' => 'Genero 2', 'ranking' => 21]);
        // $genero->active = true;
        // $genero->save();

        //acima está criando dados reais, n fakes
        //abaixo está criando dados fakes com factory

        $generos = factory(Genres::class)->times(50)->create();
    }
}
