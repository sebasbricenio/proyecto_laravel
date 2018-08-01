@extends('estaticos.default')

@section('contenido')
  <form action=""  method="post" enctype="multipart/form-data">
  <div class="container">
  <div class="inicio">
    <input type="email" name="email" class="texto_sesion" value="" placeholder="Tu Usuario">
    <input type="password" name="password" class="texto_sesion" value="" placeholder="Tu Contraseña">
    <input type="submit" name="iniciar_session" class="boton_inicio" value="Iniciar Session">
    <a class="cambio_contrasenia" href="/cambio_contrasenia">¿Olvidaste tu contraseña?</a>
    <div class="recordar"><input type="checkbox" name="recordarme" class="" value="recordarme"><label>Recordarme</label></div>
    <h1> Si no tenes cuenta</h1>
    <h1><a class="cambio" href="/register">Registrate Aqui</a></h1>
  </div>
</div>
</form>
@endsection
