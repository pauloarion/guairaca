@extends('layouts.site')

@section('site_title','Lista de Reservas')

@section('content')
<div class="container">
  <h3 class="center">Lista de Reservas</h3>

  <div class="container">
    <div class="row" align="right">
      <a class="btn blue" href="{{ route('admin.bookings.adicionar') }}">Adicionar</a>
    </div>
    <div class="row">
      <table class = "striped bordered">
        <thead>
          <tr>
            <th>Passageiro</th>
            <th>Voo</th>
            <th class="center-align">Ação</th>
          </tr>
        </thead>
        <tbody>
          @foreach($registros as $registro)
          <tr>
            <td>{{ $registro->passenger->name }} {{ $registro->passenger->surname }}</td>
            <td>{{ $registro->flight->name }}</td>
            <td class="right-align">
              <a class="btn deep-orange" href="{{ route('admin.bookings.editar',$registro->id) }}">Editar</a>
              <a class="btn red" href="{{ route('admin.bookings.deletar',$registro->id) }}">Deletar</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <ul class="pagination">
      {{$registros->links('vendor.pagination.materializecss')}}
    </ul>
  </div>

  @endsection