<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Usuario</title>
     <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>

<div class="login-container">
    <h2>Registrar Cuenta</h2>

    <input type="text" id="control" placeholder="Número de Control">
    <input type="text" id="nombre" placeholder="Nombre del Alumno">
    <input type="text" id="carrera" placeholder="Carrera">
    <input type="password" id="password" placeholder="Crear contraseña">

    <button onclick="registrar()">Crear Cuenta</button>

    <p id="mensaje"></p>
    <a href="{{ route('login') }}">Ya tengo una cuenta</a>
</div>


<script src="{{ asset('js/register.js') }}" defer></script>
</body>
</html>
