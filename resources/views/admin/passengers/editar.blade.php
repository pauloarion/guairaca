@extends('layouts.site')

@section('site_title','Editar Passageiro')

@section('content')
<div class="container">
  <h3 class="center">Editar Passageiro</h3>
  <div class="container">
    <div class="row">
      <form class="" action="{{route('admin.passengers.atualizar',$registro->id)}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="put">
        @include('admin.passengers._form')
        <button class="btn deep-orange">Atualizar</button>
      </form>
    </div>
  </div>
</div>


@endsection