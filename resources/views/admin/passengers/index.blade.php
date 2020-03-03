@extends('layouts.site')

@section('site_title','Lista de Passageiros')

@section('content')
  <div class="container">
    <h3 class="center">Lista de cursos</h3>
    <div class="row">
      <table>
        <thead>
          <tr>
            <th>Id</th>
            <th>Título</th>
          </tr>
        </thead>
        <tbody>
          @foreach($registros as $registro)
            <tr>
              <td>{{ $registro->id }}</td>
              <td>{{ $registro->name }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="row" align="center">
      {{$registros->links()}}
    <div class="row">
      <a class="btn blue" href="{{ route('admin.passengers.adicionar') }}">Adicionar</a>

    </div>

  </div>




@endsection