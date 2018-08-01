@extends('layouts.app')

@section('content')
  <div class="contenedor">
    <section class="perfil">
      <h3>Perfil de {{$usuarios->name}}</h3>
      <img class="imagen" src = "{{ \Storage::url($usuarios->avatar)}}">


    </section>

    <section class="fotos">
        @foreach($fotos as $foto)
              <a href="{{ \Storage::url($foto->avatar)}}"><img class="imagen-publicada" src = "{{ \Storage::url($foto->avatar)}}"></a>
        @endforeach

      <div class="paginacion">  {{ $fotos->links() }}</div>

    </section>

    <section class="amigos">
        <h3>Amigos Recomendados</h3>
        @foreach($amigo as $amigos)
               <ul>
                 @if($amigos->id != Auth::user()->id)
                     @if($amigos->id != $usuarios->id)
                        <li><a href="/amigos?id={{$amigos->id}}">{{ $amigos->name }}</a></li>
                     @endif
                @endif
              </ul>
        @endforeach
        <h3><a href="/home">Ir a mi perfil</a></h3>
    </section>
  </div>

@endsection
