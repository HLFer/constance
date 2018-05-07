<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'phone','dateofbirth', 'office', 'salary', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function chamados()
    {
      return $this->belongsToMany('App\Chamado');
    }

    public function eAdmin()
    {
      return $this->id == 1;
    }

    public function papeis()
    {
        return $this->belongsToMany(Papel::class);
    }

    public function perfil()
    {
        return $this->belongsToMany(Perfil::class);
    }

    public function adicionaPapel($papel)
    {
        if (is_string($papel)) {
            $papel = Papel::where('nome','=',$papel)->firstOrFail();
        }

        if($this->existePapel($papel)){
            return;
        }

        return $this->papeis()->attach($papel);

    }


    public function adicionaPerfil($perfil)
    {
        if (is_string($perfil)) {
            $papel = Perfil::where('nome','=',$perfil)->firstOrFail();
        }

        if($this->existePerfil($perfil)){
            return;
        }

        return $this->perfil()->attach($perfil);

    }


    public function existePapel($papel)
    {
        if (is_string($papel)) {
            $papel = Papel::where('nome','=',$papel)->firstOrFail();
        }

        return (boolean) $this->papeis()->find($papel->id);

    }

    public function existePerfil($perfil)
    {
        if (is_string($perfil)) {
            $perfil = Perfil::where('nome','=',$perfil)->firstOrFail();
        }

        return (boolean) $this->perfil()->find($perfil->id);

    }

    public function removePapel($papel)
    {
        if (is_string($papel)) {
            $papel = Papel::where('nome','=',$papel)->firstOrFail();
        }

        return $this->papeis()->detach($papel);
    }


    public function removePerfil($perfil)
    {
        if (is_string($perfil)) {
            $perfil = Perfil::where('nome','=',$perfil)->firstOrFail();
        }

        return $this->perfil()->detach($perfil);
    }

}
