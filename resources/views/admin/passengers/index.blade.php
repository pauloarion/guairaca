@extends('layouts.site')

@section('site_title','Lista de Passageiros')

@section('content')
<div class="container">
  <h3 class="center">Lista de Passageiros</h3>

  <div class="container">
    <div class="row" align="right">
      <a class="btn blue" href="{{ route('admin.passengers.adicionar') }}">Adicionar</a>
    </div>
    <div class="row">
      <table class = "striped bordered">
        <thead>
          <tr>
            <th>CPF</th>
            <th>Nome</th>
            <th>Idade</th>
            <th class="center-align">Ação</th>
          </tr>
        </thead>
        <tbody>
          @foreach($registros as $registro)
          <tr>
            <td>{{ $registro->cpf }}</td>
            <td>{{ $registro->name }} {{ $registro->surname }}</td>
            <td>{{ $registro->age }}</td>
            <td class="right-align">
              <a class="btn deep-orange" href="{{ route('admin.passengers.editar',$registro->id) }}">Editar</a>
              <a class="btn red" href="{{ route('admin.passengers.deletar',$registro->id) }}">Deletar</a>
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