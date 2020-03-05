@extends('layouts.site')

@section('site_title','Adicionar Reservas')

@section('content')
<div class="container">
  <h3 class="center">Adicionar Reservas</h3>
  <div class="container">
    <div class="row">
      <form class="col s12" action="{{route('admin.bookings.salvar')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        @include('admin.bookings._form')
        <button class="btn deep-orange">Salvar</button>
      </form>
    </div>
  </div>
</div>




@endsection