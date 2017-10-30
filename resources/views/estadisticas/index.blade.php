@extends('plantillas.general')

<?php $msg = Session::get('msg');?>

@section('menu')
  {{csrf_field()}}
  @include('parciales.menu')
@endsection

@section('contenido')
  <div class="row margenBajo">
    <div class="col-md-12 text-center">
      <h2 class="text-center">Información de las estadisticas</h2>
      <div class="row text-center margenBajo">
        <div class="col-md-4 text-center">
          
        </div>
        <div class="col-md-4 text-center">

        </div>
        <div class="col-md-4 text-center">
          
        </div>
      </div>
    </div>
  </div>
@endsection