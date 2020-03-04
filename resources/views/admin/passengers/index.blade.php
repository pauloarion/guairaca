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
            <th>Ação</th>
          </tr>
        </thead>
        <tbody>
          @foreach($registros as $registro)
            <tr>
              <td>{{ $registro->id }}</td>
              <td>{{ $registro->name }}</td>
              <td>
                <a class="btn deep-orange" href="{{ route('admin.passengers.editar',$registro->id) }}">Editar</a>
                <a class="btn red" href="{{ route('admin.passengers.deletar',$registro->id) }}">Deletar</a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>

    <ul class="pagination">
      {{$registros->links()}}
    </ul>
          
    <div class="row" align="center">
    <div class="row">
      <a class="btn blue" href="{{ route('admin.passengers.adicionar') }}">Adicionar</a>
    </div>

  </div>




@endsection