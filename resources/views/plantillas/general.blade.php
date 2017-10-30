<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="UTF-8">
	<title>Reporte calle</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{asset('css/app.css')}}">

	@yield('cssAdicional')

</head>
<body>
	<!-- Encabezado -->

	<section class="container-fluid ">
		<div class="row fondoGris">
			<div class="col-md-2">
				<h4 class="margeCompletoTitulo-1"> Reporte calle </h3>	
			</div>
			<div class="col-md-10">
				@yield('menu')
			</div>
		</div>
	</section>
	<!-- /Encabezado -->

	<section class="container">
		@yield('contenido')
	</section>	

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	
	@yield('jsAdicional')

</body>
<footer>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<p class="text-center">
					<span>Reporte Calle  v1.1 &copy; <?php echo date("Y"); ?> En Desarrollo...</span> 
				</p>
			</div>
		</div>
	</div>
</footer>
</html>