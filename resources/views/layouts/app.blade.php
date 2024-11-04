<!-- ESTE CÓDIGO(fondo azul) AÑADE EL SOPORTE DE TAILWIND --->
<!doctype html>
<html>
<head>
  <title>@yield('title')</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://fonts.googleapis.com/css2?family=PACIFICO&display=swap" rel="stylesheet">
<style>
  .titulo{ font-family: 'PACIFICO';font-weight: 50px; }
  .contenido { font-family: "Rock Salt"; src: url("fuentes/RockSalt-Regular.ttf") format("truetype"); }
</style>
</head>
<body>
  <header>Cabecera desde layout</header>
   @yield('content')
  <footer>Pié de página desde layout</footer> 
</body>
</html>