@extends('plantillas.general')

<?php $msg = Session::get('msg');?>

@section('menu')
  {{csrf_field()}}
  @include('parciales.menu')
@endsection

@section('contenido')
  <div class="row margenBajo">
    <div class="col-md-12 text-center">
      @include('alertas.aceptada')
      <h2 class="text-center">Información de los reportes</h2>
      <div class="row text-center margenBajo">
        <div class="col-md-4 text-center">
          
        </div>
        <div class="col-md-4 text-center">
          <a href="{{url('usuarios/registro')}}" class="btn btn-outline-primary btn-lg btn-block">Nuevo usuario</a>
        </div>
        <div class="col-md-4 text-center">
          
        </div>
      </div>
      <table class="table">
        <thead>
          <tr >
            <th class='text-center'>ID</th>
            <th class='text-center'>Nombre</th>
            <th class='text-center'>Correo electr&oacute;nico</th>
            <th class='text-center'>Acciones</th>
          </tr>
        </thead>
        <tbody>
          <!-- Contenido de la tabla -->
          @foreach($usuarios as $usuario)
            <tr>
              <td>{{$usuario->id}}</td>
              <td>{{$usuario->name}}</td>
              <td>{{$usuario->email}}</td>
              <td>
                <a class="btn btn-primary" href="?{{$usuario->id}}" title="Ver"><i class="fa fa-eye" aria-hidden="true"></i></a>
                <a class="btn btn-success" href="?{{$usuario->id}}" title="Editar"><i class="fa fa-repeat" aria-hidden="true"></i></a>
                <a class="btn btn-danger" href="?{{$usuario->id}}" title="Eliminar"><i class="fa fa-times" aria-hidden="true"></i></a>
              </td>
            </tr>
          @endforeach
          
        </tbody>
      </table>
    </div>
  </div>
@endsection