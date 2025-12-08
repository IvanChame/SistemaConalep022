
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Visor de Excel</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>
    <link rel="stylesheet" href="css/Estilo.css">

</head>
<body>

<h2>Cargar Excel y mostrar contenido en pantalla</h2>

<input type="file" id="archivoExcel" accept=".xlsx,.xls">
<button onclick="mostrarExcel()">Mostrar Excel</button>


<div id="contenedor"></div>

<script src="js/Escript.js"></script>

</body>
</html>