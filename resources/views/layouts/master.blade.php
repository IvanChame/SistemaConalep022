<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="{{ asset('css/deshboard.css') }}">
</head>
<body>

  <!-- NAVBAR -->
  <div class="navbar">
    <span class="hamburger" id="btnMenu">☰</span>
    <span class="navbar-title">Portal de Estudiantes</span>
  </div>

  <!-- SIDEBAR -->

  @include('partials.sidebar')


  <!-- CONTENIDO DINÁMICO -->
  <main>
      @yield('content')
  </main>

  <script src="{{ asset('js/deshboard.js') }}" defer></script>
</body>
</html>
