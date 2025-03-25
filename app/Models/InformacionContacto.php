<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformacionContacto extends Model
{
    use HasFactory;

    protected $table = 'informacion_contactos';
    protected $primaryKey = 'id_InformacionContacto';
    public $timestamps = true;

    protected $fillable = [
        'pais_info',
        'departamento_info',
        'ciudad_info',
        'direccion_info',
        'barrio_info',
        'telefono_fijo',
        'telefono_celular',
        'correo_electronico'
    ];

    public function persona()
    {
        return $this->belongsTo(Persona::class, 'id_persona');
    }

}

