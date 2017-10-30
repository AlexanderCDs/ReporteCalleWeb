@extends('plantillas.general')

@section('contenido')

  <div class="container-fluid margenBajo">
    <div class="row margenArriba">
      <div class="col-12">
        {!!Form::open(['route'=>'usuarios.store', 'method'=>'POST'])!!}
          <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4 text-center">
              <img src="{{asset('../logo.png')}}" alt="Logo" width="75" height="100" alt="LOGO">
            </div>
            <div class="col-sm-4"></div>
          </div>

          <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
              <h2 class="form-signin-heading">Registro</h2>
              <hr>
            </div>
            <div class="col-sm-4"></div>
          </div>

          <div class="row margenBajo">
            <div class="col-sm-4"></div>
            <div class="col-sm-4 text-center">
              <div class="input-group">
                <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                {!!Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Nombre', 'title'=>'Nombre de usuario'])!!}
              </div>
            </div>
            <div class="col-sm-4"></div>
          </div>

          <div class="row margenBajo">
            <div class="col-sm-4"></div>
            <div class="col-sm-4 text-center">
              <div class="input-group">
                <span class="input-group-addon" id="basic-addon1"><i class="fa fa-envelope"></i></span>
                {!!Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'ejemplo@ejemplo.com', 'title'=>'Correo electrónico'])!!}
              </div>
            </div>
            <div class="col-sm-4"></div>
          </div>

          <div class="row margenBajo">
            <div class="col-sm-4"></div>
            <div class="col-sm-4 text-center">
              <div class="input-group">
                <span class="input-group-addon" id="basic-addon1"><i class="fa fa-key"></i></span>
                {!!Form::password('password', ['class'=>'form-control', 'placeholder'=>'Contraseña', 'title'=>'Contraseña de usuario'])!!}
              </div>
            </div>
            <div class="col-sm-4"></div>
          </div>

          <div class="row margenBajo">
            <div class="col-sm-4"></div>
            <div class="col-sm-4 text-center">
              <div class="input-group">
                <span class="input-group-addon" id="basic-addon1"><i class="fa fa-key"></i></span>
                {!!Form::password('password_confirmation', ['class'=>'form-control', 'placeholder'=>'Confirmación de contraseña', 'title'=>'Contraseña de usuario'])!!}
              </div>
            </div>
            <div class="col-sm-4"></div>
          </div>

          <div class="row margenBajo">
            <div class="col-sm-4"></div>
            <div class="col-sm-4 text-center">
              {!!Form::submit('Guardar', ['class'=>'btn btn-outline-success btn-lg btn-block'])!!}
            </div>
            <div class="col-sm-4"></div>
          </div>
        {!!Form::close()!!}
      </div>
    </div>
  </div>
@endsection