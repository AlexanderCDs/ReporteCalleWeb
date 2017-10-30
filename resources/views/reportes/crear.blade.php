@extends('plantillas.general')

@section('menu')
  {{csrf_field()}}
  @include('parciales.menu')
@endsection

@section('contenido')
	<div class="row">
		<div class="col-2"></div>
		<div class="col-8">
			<h2 class="text-center">Nuevo reporte</h2>
			<form action="/categorias" method="POST">
				{{csrf_field()}}
				@include('reportes.parciales.formulario_reporte')
			</form>
		</div>
		<div class="col-2"></div>
	</div>
@endsection