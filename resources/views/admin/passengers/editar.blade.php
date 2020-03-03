@extends('layouts.site')

@section('titulo','Cursos')

@section('content')
  <div class="container">
    <h3 class="center">Editando Curso</h3>
    <div class="row">
      <form class="" action="{{route('admin.passengers.atualizar',$registro->id)}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="put">
        @include('admin.passengers._form')
        <button class="btn deep-orange">Atualizar</button>
      </form>
    </div>
  </div>


@endsection
