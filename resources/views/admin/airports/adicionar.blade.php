@extends('layouts.site')

@section('site_title','Adicionar Aeroporto')

@section('content')
<div class="container">
  <h3 class="center">Adicionar Aeroporto</h3>
  <div class="container">
    <div class="row">
      <form class="col s12" action="{{route('admin.airports.salvar')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        @include('admin.airports._form')
        <button class="btn deep-orange">Salvar</button>
      </form>
    </div>
  </div>
</div>




@endsection