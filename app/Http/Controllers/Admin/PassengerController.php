<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Passenger;

class PassengerController extends Controller
{
    public function index()
    {
      $registros = Passenger::paginate(3);
      return view('admin.passengers.index',compact('registros'));
    }

    public function adicionar()
    {
      return view('admin.passengers.adicionar');
    }

    public function salvar(Request $req)
    {
      $dados = $req->all();
      
      Passenger::create($dados);

      return redirect()->route('admin.passengers');

    }

    public function editar($id)
    {
      $registro = Passenger::find($id);
      return view('admin.passengers.editar',compact('registro'));
    }
    public function atualizar(Request $req, $id)
    {
      $dados = $req->all();

      Passenger::find($id)->update($dados);

      return redirect()->route('admin.passengers');

    }

    public function deletar($id)
    {
      Passenger::find($id)->delete();
      return redirect()->route('admin.passengers');
    }

}
