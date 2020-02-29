<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dados = [
            'name' => "Curso Admin",
            'email' => "admin@mail.com",
            'password' => bcrypt("123456"),
        ];
        if (User::where('email', '=', $dados['email'])->count()) {
            $usuario = User::where('email', '=', $dados['email'])->first();
            $usuario->update($dados);
            echo "Usuario Alterado!";
        } else {
            User::create($dados);
            echo "Usuario Criado!";
        }

        $dados = [
            'name' => "Bob",
            'email' => "bob@mail.com",
            'password' => bcrypt("123456"),
        ];
        if (User::where('email', '=', $dados['email'])->count()) {
            $usuario = User::where('email', '=', $dados['email'])->first();
            $usuario->update($dados);
            echo "Usuario Alterado!";
        } else {
            User::create($dados);
            echo "Usuario Criado!";
        }

        $dados = [
            'name' => "Alice",
            'email' => "alice@mail.com",
            'password' => bcrypt("123456"),
        ];
        if (User::where('email', '=', $dados['email'])->count()) {
            $usuario = User::where('email', '=', $dados['email'])->first();
            $usuario->update($dados);
            echo "Usuario Alterado!";
        } else {
            User::create($dados);
            echo "Usuario Criado!";
        }
    }
}
