@extends('plantillas.general')

<?php $msg = Session::get('msg');?>

@section('menu')
  {{csrf_field()}}
  @include('parciales.menu')
@endsection

@section('contenido')
  <div class="row margenBajo">
    <div class="col-md-12 text-center">
      <h2 class="text-center">Información de los segimientos de reporte</h2>
      <div class="row text-center margenBajo">
        <div class="col-md-4 text-center">
          
        </div>
        <div class="col-md-4 text-center">
          <a href="{{url('usuarios/crear')}}" class="btn btn-outline-primary btn-lg btn-block">Nuevo seguimiento</a>
        </div>
        <div class="col-md-4 text-center">
          
        </div>
      </div>
      <table class="table">
        <thead>
          <tr >
            <th class='text-center'>Follio</th>
            <th class='text-center'>Tipo del reporte</th>
            <th class='text-center'>Descripci&oacute;n</th>
            <th class='text-center'>Fecha</th>
            <th class='text-center'>Hora</th>
            <th class='text-center'>Acciones</th>
          </tr>
        </thead>
        <tbody>
          <!-- Contenido de la tabla -->
        </tbody>
      </table>
    </div>
  </div>
@endsection