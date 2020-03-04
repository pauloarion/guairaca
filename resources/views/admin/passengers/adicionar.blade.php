@extends('layouts.site')

@section('site_title','Adicionar Passageiro')

@section('content')
<div class="container">
  <h3 class="center">Adicionar Passageiro</h3>
  <div class="container">
    <div class="row">
      <form class="col s12" action="{{route('admin.passengers.salvar')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        @include('admin.passengers._form')
        <button class="btn deep-orange">Salvar</button>
      </form>
    </div>
  </div>
</div>




@endsection