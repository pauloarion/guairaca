@extends('layouts.site')

@section('site_title','Adicionar Voo')

@section('content')
<div class="container">
  <h3 class="center">Adicionar Voo</h3>
  <div class="container">
    <div class="row">
      <form class="col s12" action="{{route('admin.flights.salvar')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        @include('admin.flights._form')
        <button class="btn deep-orange">Salvar</button>
      </form>
    </div>
  </div>
</div>




@endsection