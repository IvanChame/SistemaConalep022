<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">


</head>

<body>

<div class="login-container">
    <h2>Iniciar Sesión</h2>

    <!-- LOS INPUTS VAN AQUÍ, NO EN EL HEAD -->
    <input type="text" id="control" placeholder="Número de Control">
    <input type="password" id="password" placeholder="Contraseña">

    <button onclick="validarLogin()">Entrar</button>
    <p id="mensaje"></p>

    <a href="register.html">Crear una cuenta</a><br>
    <a href="recuperar.html">Recuperar contraseña</a>
</div>

<script src="{{ asset('js/login.js') }}" defer></script>

<!-- LOADER DEL CONALEP -->
<div id="loader">
    <img src="{{ asset('img/conalep.png') }}" alt="Logo">
</div>

</body>
</html>
