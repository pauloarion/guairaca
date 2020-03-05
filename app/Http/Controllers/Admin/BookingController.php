<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Booking;
use App\Flight;
use App\Passenger;

class BookingController extends Controller
{
    public function index()
    {
      $registros = Booking::paginate(3);
      return view('admin.bookings.index',compact('registros'));
    }

    public function adicionar()
    {
      $passengers = Passenger::all();
      $flights = Flight::all();
      $kinds = config('enums.kinds');
      return view('admin.bookings.adicionar',compact('passengers','flights','kinds'));
    }

    public function salvar(Request $req)
    {
      $dados = $req->all();
      Booking::create($dados);
      return redirect()->route('admin.bookings');
    }

    public function editar($id)
    {
      $registro = Booking::find($id);
      $passengers = Passenger::all();
      $flights = Flight::all();
      $kinds = config('enums.kinds');
      return view('admin.bookings.editar',compact('registro','passengers','flights','kinds'));
    }

    public function atualizar(Request $req, $id)
    {
      $dados = $req->all();
      Booking::find($id)->update($dados);
      return redirect()->route('admin.bookings');

    }

    public function deletar($id)
    {
      Booking::find($id)->delete();
      return redirect()->route('admin.bookings');
    }
}
