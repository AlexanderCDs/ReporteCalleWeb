  <nav class="navbar navbar-expand-lg navbar-light fondoGris alineadoDerecha">
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">

        <li class="nav-item">
          <a class="nav-link" href="{{url('usuarios/')}}"><i class="fa fa-users" aria-hidden="true"></i> Usuarios</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-sticky-note" aria-hidden="true"></i> Reportes
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{url('reportes/')}}"><i class="fa fa-sticky-note" aria-hidden="true"></i> Lista de reportes</a>
            <a class="dropdown-item" href="{{url('reportes/nuevos')}}"><i class="fa fa-plus-square" aria-hidden="true"></i> Reportes nuevos</a>
            <a class="dropdown-item" href="{{url('reportes/pendientes')}}"><i class="fa fa-spinner" aria-hidden="true"></i> Reportes en proceso</a>
            <a class="dropdown-item" href="{{url('reportes/aprovados')}}"><i class="fa fa-check-square-o" aria-hidden="true"></i> Reportes aprovados</a>
            <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#"><i class="fa fa-picture-o" aria-hidden="true"></i> Galeria de fotos</a>
            </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{url('seguimientos/')}}"><i class="fa fa-arrow-right" aria-hidden="true"></i> Seguimientos</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{url('estadisticas/')}}"><i class="fa fa-bar-chart" aria-hidden="true"></i> Estadisticas</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-user" aria-hidden="true"></i> Nombre del usuario 
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{url('/')}}"><i class="fa fa-sign-out" aria-hidden="true"></i> Cerrar sesi&oacute;n</a>
            <a class="dropdown-item" href="#"><i class="fa fa-wrench" aria-hidden="true"></i> Perfil</a>
            <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#"><span class="fa fa-user"></span> Otra cosa</a>
            </div>
        </li>
      </ul>
    </div>
  </nav>  