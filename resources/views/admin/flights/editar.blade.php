@extends('layouts.site')

@section('site_title','Editar Voo')

@section('content')
<div class="container">
  <h3 class="center">Editar Voo</h3>
  <div class="container">
    <div class="row">
      <form class="" action="{{route('admin.flights.atualizar',$registro->id)}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="put">
        @include('admin.flights._form')
        <button class="btn deep-orange">Atualizar</button>
      </form>
    </div>
  </div>
</div>


@endsection