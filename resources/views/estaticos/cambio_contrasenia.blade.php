@extends('estaticos.default')

@section('contenido')
  <h1>Recupero de contraseña</h1>
  <div class="inicio">
    <input type="email" name="correo" class="texto" value="" placeholder="Correo Electronico">
    <input type="submit" name="registro" class="boton_registro" value="Enviar">
    <input type="reset" name="borrar" class="boton_borrar" value="Borrar">
  </div>
@endsection
