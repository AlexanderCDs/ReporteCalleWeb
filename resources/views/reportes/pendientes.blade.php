@extends('plantillas.general')

<?php $msg = Session::get('msg');?>

@section('menu')
  {{csrf_field()}}
  @include('parciales.menu')
@endsection

@section('contenido')
  <div class="row margenBajo">
    <div class="col-md-12 text-center">
      <h2 class="text-center">Reportes en proceso <span class="badge badge-secondary badge-pill" id="nEn">0</span> </h2>
      <div class="row text-center margenBajo">
        <div class="col-md-4"></div>
        <div class="col-md-4 text-center">
          <a href="{{url('reportes/aprovados')}}" class="btn btn-outline-success btn-lg btn-block">Reportes aprovados</span></a>
        </div>
        <div class="col-md-4"></div>
      </div>
      <table class="table">
        <thead>
          <tr >
            <th class='text-center'>Follio</th>
            <th class='text-center'>Estado</th>
            <th class='text-center'>Descripci&oacute;n</th>
            <th class='text-center'>Direcci&oacute;n</th>
            <th class='text-center'>Fecha</th>
            <th class='text-center'>Hora</th>
            <th class='text-center'>Acciones</th>
          </tr>
        </thead>
        <tbody id="cTabla"></tbody>
      </table>  
    </div>
  </div>
  {{csrf_field()}}
  @include('parciales.fire_base')
  @include('parciales.baseDatos')
  @include('parciales.proceso')
@endsection