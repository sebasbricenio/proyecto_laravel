<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Usuario;

class IndexController extends Controller{
      public function index(Request $request){
        return view('estaticos.index');
      }

      public function preguntas_frecuentes(Request $request){
        return view('estaticos.preguntas_frecuentes');
      }

      public function cambio_contrasenia(Request $request){
        return view('estaticos.cambio_contrasenia');
      }

      public function publicar(Request $request){
        return view('publicaciones.publicaciones');
      }

      public function perfil(Request $request){
          $usuarios = Usuario::all();
          $view = view('estaticos.perfil');
          return $view->with('usuarios', $usuarios);
      }

      public function registro(Request $request)
    {
        $view = view('estaticos.registro');

        return $view;
    }

    public function crear(Request $request)
    {
        $this->validate(
            $request,
            [
                'nombre'        => 'required',
                'apellido'       => 'required',
                'correo'       => 'required',
                'password' => 'required',
                'password_confirmar' => 'required',
            ],
            [
                'nombre.required'  => 'El nombre es obligatorio',
                'apellido.required' => 'El apellido es obligatorio',
                'correo.required|unique:Usuarios'  => 'El correo es obligatorio', //unique:Usuarios se fija en la base de datos que el mail sea unico
                'password.required'  => 'La contraseña es obligatoria',
                'password_confirmar.required'  => 'La contraseña es obligatoria',
            ]);

              $registro = new usuarios($request->except(['_token']));

              $resgistro->save();

              return redirect('registro')
              ->with('El usuarios ha sido registrado');
      }

    

}
