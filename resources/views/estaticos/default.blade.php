<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-sclate=1.0">
    <title>Red Social</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
  </head>
  <header class="cabecera">
    <h1><a href="/login">Bienvenido a Label</a></h1>
  </header>
  <body>
    <section class="formulario">


        @yield('contenido')


    </section>

    <footer>
      <ul>
        <li><a href="#">Sobre Nosotros</a></li>
        <li><a href="/preguntas_frecuentes">Preguntas Frecuentes</a></li>
      </ul>
    </footer>
  </body>
</html>
