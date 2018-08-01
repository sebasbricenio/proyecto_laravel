@extends('estaticos.default')
@section('contenido')
  <div class="inicio">
    <input type="text" name="publicacion" class="texto_publicacion" value="" placeholder="Añade un comentario">
    <input class="form-control" type="file" name="imagen" value="">
    <input type="submit" name="publicar" class="boton_inicio" value="Publicar">
  </div>
@endsection
