<?php

namespace App\Http\Controllers;
use App\User;
use App\Publicaciones;
use Illuminate\Http\Request;

class PublicacionesController extends Controller
{
    protected function amigos(request $request){
      $amigos = User::all();
      $usuario = User::find($request->id);
      //dd($usuario);
      $publicaciones = Publicaciones::where('id_publicacion', '=', $request->id)->paginate(10);
      return view('amigos')->with('fotos', $publicaciones)->with('amigo', $amigos)->with('usuarios',$usuario);
      //$publicaciones = Publicaciones::where('id_publicacion', '=', 3)->get();
      //$publicaciones = Publicaciones::where('id_publicacion', '=', \Auth::user()->id)->get();
      //dd($publicaciones);
      //return view('layouts.home')->with('fotos', $publicaciones);
    }

    protected function agregar(array $data)
    {
      $ruta='';

      //dd(user()->id);
      $file = $request->file('imagen');
dd($file);
      if ($file) {
          $ruta = $file->store('avatars', 'public');
      }



        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'avatar' => $ruta
        ]);
    }

    public function publicar(Request $request)
    {

        $ruta='';

        //dd(user()->id);
        $file = $request->file('imagen');

        if ($file) {
            $ruta = $file->store('avatars', 'public');
        }

        Publicaciones::create([
            'id_publicacion' => \Auth::user()->id,
            'avatar' => $ruta,
            'comentario' => $request->input('posteo'),
            'activo' => 'si'
        ]);

        return redirect('/home');

    }
    /*public function amigos()
    {
      //$publicaciones = Publicaciones::where('id_publicacion', '=', 3)->paginate(1);
      //$publicaciones = Publicaciones::where('id_publicacion', '=', \Auth::user()->id)->paginate(10);
      $amigos = User::all('name');
      return view('home')->with('amigos', $amigos);
    }*/
}
