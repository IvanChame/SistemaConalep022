<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Escolar</title>
  <link rel="stylesheet" href="{{ asset('css/deshboard.css') }}">
</head>
<body>

  <!-- NAVBAR -->
  <div class="navbar">
    <span class="hamburger" id="btnMenu">☰</span>
    <span class="navbar-title">Portal de Estudiantes</span>
  </div>

  <!-- SIDEBAR -->
  <div class="sidebar" id="sidebar">
    <a href="#">Inicio</a>
    <a href="#">Información Escolar</a>
    <a href="#">Inscripciones</a>
    <a href="#">Evaluación Docente</a>
    <a href="#">Documentos Oficiales</a>
    <a href="#">Encuesta de Servicios</a>
    <a href="#">Buzón de Sugerencias</a>
    <a href="#">Cerrar Sesión</a>
  </div>

  <!-- CONTENT -->
  <div class="content">
    <div class="card">
      <h2>Bienvenido al Dashboard</h2>
      <p>Este es un panel escolar responsive con menú deslizable.</p>
    </div>

    <div class="card">
      <h3>Mensajes</h3>
      <div class="alert">⚠ No existen mensajes nuevos.</div>
    </div>

    <div class="card">
      <h3>Aviso General</h3>
      <p>Se hace del conocimiento a toda la comunidad estudiantil...</p>
    </div>
  </div>

<script src="{{ asset('js/deshboard.js') }}" defer></script>

</body>
</html>
