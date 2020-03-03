@extends('layouts.site')

@section('titulo','Cursos')

@section('content')
  <div class="container">
    <h3 class="center">Adicionar Curso</h3>
    <div class="row">
      <form class="" action="{{route('admin.passengers.salvar')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        @include('admin.passengers._form')
        <button class="btn deep-orange">Salvar</button>
      </form>
    </div>
  </div>




@endsection