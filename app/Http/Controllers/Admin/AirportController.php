<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Airport;

class AirportController extends Controller
{
    public function index()
    {
      $registros = Airport::paginate(3);
      return view('admin.airports.index',compact('registros'));
    }

    public function adicionar()
    {
      return view('admin.airports.adicionar');
    }

    public function salvar(Request $req)
    {
      $dados = $req->all();
      
      Airport::create($dados);

      return redirect()->route('admin.airports');

    }

    public function editar($id)
    {
      $registro = Airport::find($id);
      return view('admin.airports.editar',compact('registro'));
    }
    public function atualizar(Request $req, $id)
    {
      $dados = $req->all();

      Airport::find($id)->update($dados);

      return redirect()->route('admin.airports');

    }

    public function deletar($id)
    {
      Airport::find($id)->delete();
      return redirect()->route('admin.airports');
    }

}
