<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    protected $table = 'perfis';
    protected $fillable = ['nome','email','phone','dateofbirth','office','salary'];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function existePerfil($user)
    {
        if (is_string($user)) {
            $user = User::where('nome','=',$user)->firstOrFail();
            $user = User::where('email','=',$user)->firstOrFail();
            $user = User::where('phone','=',$user)->firstOrFail();
            $user = User::where('dateofbirt','=',$user)->firstOrFail();
            $user = User::where('office','=',$user)->firstOrFail();
            $user = User::where('salary','=',$user)->firstOrFail();
        }

        return (boolean) $this->users()->find($user->id);

    }
    public function removeUser($user)
    {
        if (is_string($user)) {
            $user = User::where('id','=',$user)->firstOrFail();
        }

        return $this->users()->detach($user);
    }
}