@extends('estaticos.default')

@section('contenido')
  <form action="{{ route('register') }}"  method="post" enctype="multipart/form-data">
  <div class="container">
  <h1>Formulario de Registro</h1>
  <label for="" >
    <input type="text" class="texto" name="nombre" value="<?php // print $nombre; ?>" placeholder="Tu Nombre"><span style="color: red;"> <?php // isset($mensaje_error["nombre"]) ? print $mensaje_error["nombre"] : "";?></span>
  </label>
  <br>
  <label for="">
    <input type="text" class="texto" name="apellido" value="<?php // print $apellido; ?>" placeholder="Tu Apellido"><span style="color: red;"> <?php // isset($mensaje_error["apellido"]) ? print $mensaje_error["apellido"] : "";?></span>
  </label>
  <br>
  <label for="" >
    <input type="email" class="texto" name="correo" value="<?php // print $email;?>" placeholder="Tu Email"><span style="color: red;"> <?php //isset($mensaje_error["correo"]) ? print $mensaje_error["correo"] : "";?></span>
  </label>
  <br>
  <label for="" >
    <input type="password" class="texto" name="password" value="" placeholder="Tu contraseña"><span><?php // isset($mensaje_error["contrasenia"]) ? print $mensaje_error["contrasenia"] : "";?></span>
  </label>
  <br>
  <br>
  <label for="" >
    <input type="password" class="texto" name="password_confirmar" value="" placeholder="confirmar tu contraseña"><span><?php // isset($mensaje_error["contrasenia"]) ? print $mensaje_error["contrasenia"] : "";?></span>
  </label>
  <ul>
    <li class="estado_soltero"><h3 class="estado"><input type="radio" name="estado_civil" class="1estado" value="soltero">Hombre</h3></li>
    <li class="estado_civil"><h3 class="estado"><input type="radio" name="estado_civil" class="1estado" value="casado">Mujer</h3></li>
  </ul>
  <br>
  <div class="form-group">
    <input class="form-control" type="file" name="imagen" value=""><span><?php //isset($mensaje_error["contrasenia"]) ? print $mensaje_error["imagen"] : "";?></span>
  </div>
  <br>
  <div class="botones">
    <input type="submit" name="registro" class="boton_registro" value="Registrarse">
    <input type="reset" name="borrar" class="boton_borrar" value="Borrar">
  </div>
</div>
</form>
@endsection
