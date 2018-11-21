<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suscripcion extends Model
{
    protected $table = 'suscripcion';
    
    protected $fillable = ['suscripcion_categorias', 'suscripcion_users_id'];
    
    public function DatosUsuario()
    {
        return $this->belongsTo('App\User', 'suscripcion_users_id', 'id');
    }
}
