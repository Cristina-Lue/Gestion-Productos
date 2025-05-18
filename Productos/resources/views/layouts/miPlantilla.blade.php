<!DOCTYPE html>
<!-- 
  Plantilla base de la aplicación Laravel
  Contiene la estructura HTML común a todas las vistas
-->
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Productos</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>
    <div>
        @yield('content') <!-- directiva que se utiliza para insertar el contenido-->
    </div>
</body>
</html>
