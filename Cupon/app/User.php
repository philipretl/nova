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
        'users_nombre', 'users_apellido', 'email', 'password', 'users_direccion', 'users_telefono', 'users_tipo_usuario', 'users_estatus', 'users_aliado_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function setEstatusAttribute($value)
    {
        if($value) {
            $id = $this->attributes['id'];
            static::where('id','=',$id)->update(['users_estatus'=>$value]);
        }
    }
}
