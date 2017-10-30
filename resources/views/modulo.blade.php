@extends('plantillas.general')

@section('contenido')
  <div class="row margenBajo">
    <div class="col-12">
      <div class="row margenArriba">
        <div class="col-md-3">
          <a href="{{url('usuarios/')}}"  class="btn btn-outline-primary btn-lg btn-block">Usuarios</a>
        </div>
        <div class="col-md-3">
          <a href="{{url('reportes/')}}"  class="btn btn-outline-primary btn-lg btn-block">Reportes</a>
        </div>
        <div class="col-md-3">
          <a href="{{url('seguimientos/')}}"  class="btn btn-outline-primary btn-lg btn-block">Alcances</a>
        </div>
        <div class="col-md-3">
          <a href="{{url('estadisticas/')}}"  class="btn btn-outline-primary btn-lg btn-block">Estadisticas</a>
        </div>
      </div>
    </div>
  </div>
@endsection