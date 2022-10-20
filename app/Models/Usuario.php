<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\SoftDeletes;
use Dyrynda\Database\Support\CascadeSoftDeletes;
//para generar los metodos  de relacion necesario entre usuario y roles
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Laravel\Sanctum\HasApiTokens;


class Usuario extends Authenticatable
{
    use HasApiTokens; 
    use HasFactory;
    use  Notifiable;
    use HasRoles;
    use SoftDeletes,CascadeSoftDeletes;
    protected $guard_name = 'web';
    protected $fillable = [
        
        'ci',
        'nombre',
        'ape_paterno',
        'ape_materno',
        'fechaRegistro',
        'tipo',
        'email',
        'password',
    ];
    protected $cascadeDeletes = ['cliente','cajero','chef','administrador','camarero'];

    protected $dates = ['deleted_at'];

    public function cliente()
    {
        return $this->hasOne('App\Models\Cliente','idUsuario','id');
    }
    public function camarero()
    {
        return $this->hasOne('App\Models\Camarero','idUsuario','id');
    }
    public function cajero()
    {
        return $this->hasOne('App\Models\Cajero','idUsuario','id');
    }
    public function chef()
    {
        return $this->hasOne('App\Models\Chef','idUsuario','id');
    }
    public function administrador()
    {
        return $this->hasOne('App\Models\Administrador','idUsuario','id');
    }

 
}


