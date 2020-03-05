<?php

namespace App\Http\Controllers\Admin;

use App\Airport;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Flight;

class FlightController extends Controller
{
    public function index()
    {
      $registros = Flight::paginate(3);
      return view('admin.flights.index',compact('registros'));
    }

    public function adicionar()
    {
      $from_list = Airport::all();
      $to_list = Airport::all();
      $airlines = config('enums.airlines');
      return view('admin.flights.adicionar',compact('from_list','to_list','airlines'));
    }

    public function salvar(Request $req)
    {
      $dados = $req->all();
      $dados['active'] = (!isset($dados['active']))? 0 : 1;
      
      Flight::create($dados);
      return redirect()->route('admin.flights');

    }

    public function editar($id)
    {
      $registro = Flight::find($id);
      $from_list = Airport::all();
      $to_list = Airport::all();
      $airlines = config('enums.airlines');
      return view('admin.flights.editar',compact('registro','from_list','to_list','airlines'));
    }
    public function atualizar(Request $req, $id)
    {
      $dados = $req->all();
      $dados['active'] = (!isset($dados['active']))? 0 : 1; 
      Flight::find($id)->update($dados);

      return redirect()->route('admin.flights');

    }

    public function deletar($id)
    {
      Flight::find($id)->delete();
      return redirect()->route('admin.flights');
    }

}
