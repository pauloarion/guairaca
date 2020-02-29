<?php

use Illuminate\Database\Seeder;
use App\Airport;

class AirportSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dados = [
            'name' => "Florianopolis Airport",
        ];
        Airport::create($dados);
        echo "Airport Criado!";

        $dados = [
            'name' => "Guarulhos Airport",
        ];
        Airport::create($dados);
        echo "Airport Criado!";
    }
}
