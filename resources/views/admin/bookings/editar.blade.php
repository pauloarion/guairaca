@extends('layouts.site')

@section('site_title','Editar Reservas')

@section('content')
<div class="container">
  <h3 class="center">Editar Reservas</h3>
  <div class="container">
    <div class="row">
      <form class="" action="{{route('admin.bookings.atualizar',$registro->id)}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="put">
        @include('admin.bookings._form')
        <button class="btn deep-orange">Atualizar</button>
      </form>
    </div>
  </div>
</div>


@endsection