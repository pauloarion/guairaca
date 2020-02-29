<?php

use Illuminate\Database\Seeder;
use App\Passenger;

class PassengerSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dados = [
            'name' => "Joaquim",
            'surname' => "Rocha",
            'cpf'=> "02514201514",
            'birthday' => Carbon\Carbon::createFromDate(1982,9,10),
            'email' => 'p@p.com',
            'phone' => '48999565852',
            'created_by' => 1,
            'updated_by' => 1

        ];
        if (Passenger::where('cpf', '=', $dados['cpf'])->count()) {
            $passenger = Passenger::where('cpf', '=', $dados['cpf'])->first();
            $passenger->update($dados);
            echo "Usuário Alterado!";
        } else {
            Passenger::create($dados);
            echo "Usuário Criado!";
        }

        $dados = [
            'name' => "Marta",
            'surname' => "Carvalho",
            'cpf'=> "36261465029",
            'birthday' => Carbon\Carbon::createFromDate(1982,9,10),
            'email' => 'p@p.com',
            'phone' => '48999565852',
            'created_by' => 1,
            'updated_by' => 1

        ];
        if (Passenger::where('cpf', '=', $dados['cpf'])->count()) {
            $passenger = Passenger::where('cpf', '=', $dados['cpf'])->first();
            $passenger->update($dados);
            echo "Usuário Alterado!";
        } else {
            Passenger::create($dados);
            echo "Usuário Criado!";
        }

        $dados = [
            'name' => "Paulo",
            'surname' => "Frota",
            'cpf'=> "52935036000",
            'birthday' => Carbon\Carbon::createFromDate(1982,9,10),
            'email' => 'p@p.com',
            'phone' => '48999565852',
            'created_by' => 1,
            'updated_by' => 1

        ];
        if (Passenger::where('cpf', '=', $dados['cpf'])->count()) {
            $passenger = Passenger::where('cpf', '=', $dados['cpf'])->first();
            $passenger->update($dados);
            echo "Usuário Alterado!";
        } else {
            Passenger::create($dados);
            echo "Usuário Criado!";
        }

        $dados = [
            'name' => "Rafaela",
            'surname' => "Silva",
            'cpf'=> "86265985051",
            'birthday' => Carbon\Carbon::createFromDate(1982,9,10),
            'email' => 'p@p.com',
            'phone' => '48999565852',
            'created_by' => 1,
            'updated_by' => 1

        ];
        if (Passenger::where('cpf', '=', $dados['cpf'])->count()) {
            $passenger = Passenger::where('cpf', '=', $dados['cpf'])->first();
            $passenger->update($dados);
            echo "Usuário Alterado!";
        } else {
            Passenger::create($dados);
            echo "Usuário Criado!";
        }

        $dados = [
            'name' => "Marina",
            'surname' => "Lira",
            'cpf'=> "77799194049",
            'birthday' => Carbon\Carbon::createFromDate(1982,9,10),
            'email' => 'p@p.com',
            'phone' => '48999565852',
            'created_by' => 1,
            'updated_by' => 1

        ];
        if (Passenger::where('cpf', '=', $dados['cpf'])->count()) {
            $passenger = Passenger::where('cpf', '=', $dados['cpf'])->first();
            $passenger->update($dados);
            echo "Usuário Alterado!";
        } else {
            Passenger::create($dados);
            echo "Usuário Criado!";
        }
    }
}
