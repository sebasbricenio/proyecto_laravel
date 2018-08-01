<?php

namespace App\Http\Controllers;
use App\User;
use App\Publicaciones;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
      //$publicaciones = Publicaciones::where('id_publicacion', '=', 3)->paginate(1);
      $amigos = User::all();
      //dd($amigos);
      $publicaciones = Publicaciones::where('id_publicacion', '=', \Auth::user()->id)->paginate(10);
      //dd($publicaciones);

      return view('home')->with('fotos', $publicaciones)->with('amigos', $amigos);
    }
}
