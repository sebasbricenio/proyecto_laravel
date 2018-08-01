@extends('layouts.app')

@section('content')
  <div class="contenedor">
    <section class="perfil">
      <h3>Perfil de {{Auth::user()->name}}</h3>
      <img class="imagen" src = "{{ \Storage::url(Auth::user()->avatar)}}">

      <form method="POST" action="/home" enctype="multipart/form-data">
          @csrf
          <h4>Subi tu foto</h4>
          <input class="form-control" type="file" name="imagen" value=""><span><?php //isset($mensaje_error["contrasenia"]) ? print $mensaje_error["imagen"] : "";?></span>
          <h4>Agregale un comentario</h4>
          <input class="comentario" type="text" name="posteo" value="">
          <input type="submit" class="publicar" name="publicar" value="Publicar">
      </form>
    </section>

    <section class="fotos">
        @foreach($fotos as $foto)
              <a href="{{ \Storage::url($foto->avatar)}}"><img class="imagen-publicada" src = "{{ \Storage::url($foto->avatar)}}"></a>
        @endforeach

      <div class="paginacion">  {{ $fotos->links() }}</div>

    </section>

    <section class="amigos">
        <h3>Amigos Recomendados</h3>
        @foreach($amigos as $amigo)
               <ul>
                  @if($amigo->id != Auth::user()->id)
                      <li><a href="/amigos?id={{$amigo->id}}">{{ $amigo->name }}</a></li>
                  @endif
              </ul>
        @endforeach
    </section>
  </div>

@endsection
