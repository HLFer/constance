<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Edicao extends Model
{
  protected $table = 'edicoes';
  protected $fillable = ['nome','email','phone' ,'dateofbirth' ,'office' ,'salary'];

  public function perfis()
  {
      return $this->belongsToMany(Perfil::class);
  }
  
}