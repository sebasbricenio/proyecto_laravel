<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publicaciones extends Model
{
    protected $table = 'publicaciones';
  //use Notifiable;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'id_publicacion', 'avatar','comentario','activo'
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
     'remember_token',
  ];
}
