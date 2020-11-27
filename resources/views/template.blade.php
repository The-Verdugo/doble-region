<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    {{-- Hojas de estilo --}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/estilos-index.css')}}">
    <link rel="stylesheet" href="{{asset('css/estilos-menu.css')}}">
    <title>@yield('titulo')</title>
</head>
<body>
    <header>       
      <nav class="navbar fixed-top navbar-expand-lg navbar-dark gris-transparent scrolling-navbar">
        <div class="container">
          <a class="navbar-brand" href="#"><strong>Doble Regi&oacute;n</strong></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
              <a class="nav-link" href="{{route('Inicio')}}">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('Albumes')}}">&Aacute;lbumes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('Contacto')}}">Contacto</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('Biografia')}}">Biograf&iacute;a</a>
              </li>
            </ul>
          </div>      
        </div>
      </nav>
    </header>
@yield('body')
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <h2>Este es el footer</h2>
          </div>
        </div>
      </div>
    </footer>
    <script src="{{asset('js/app.js')}}"></script>
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
</body>
</html>