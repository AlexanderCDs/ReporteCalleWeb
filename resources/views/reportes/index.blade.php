@extends('plantillas.general')

<?php $msg = Session::get('msg');?>

@section('menu')
  {{csrf_field()}}
  @include('parciales.menu')
@endsection

@section('contenido')
  <div class="row margenBajo">
    <div class="col-md-12 text-center">
      <h2 class="text-center">Información de los reportes</h2>
      <h3>Total de reportes <span class="badge badge-secondary badge-pill" id="nTo">0</span></h3>
      <div class="row text-center margenBajo">
        <div class="col-md-4 text-center">
          <a href="{{url('reportes/nuevos')}}" class="btn btn-outline-primary btn-lg btn-block">Nuevos reportes <span class="badge badge-primary badge-pill" id="nNu">0</span></a>
        </div>
        <div class="col-md-4 text-center">
          <a href="{{url('reportes/pendientes')}}" class="btn btn-outline-danger btn-lg btn-block">Reportes en proceso <span class="badge badge-danger badge-pill" id="nEn">0</span></a>
        </div>
        <div class="col-md-4 text-center">
          <a href="{{url('reportes/aprovados')}}" class="btn btn-outline-success btn-lg btn-block">Reportes aprovados <span class="badge badge-success badge-pill" id="nAp">0</span></span></a>
        </div>
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
  @include('parciales.reportes')
@endsection