<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Recuperar Cuenta</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>

<div class="login-container">
    <h2>Recuperar Contraseña</h2>

    <input type="text" id="control" placeholder="Número de Control">
    <button onclick="recuperar()">Recuperar</button>

    <p id="mensaje"></p>
    <a href="{{ route('login') }}">Regrsar al login</a>

</div>


<script src="{{ asset('js/recuperar.js') }}" defer></script>
</body>
</html>
