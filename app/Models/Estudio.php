<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudio extends Model
{
    use HasFactory;

    // Nombre de la tabla en la base de datos
    protected $table = 'estudios';

    // Clave primaria
    protected $primaryKey = 'id_estudio';

    // Habilitar timestamps si la tabla no tiene created_at y updated_at
    public $timestamps = false;

    // Definir los campos que se pueden asignar de manera masiva
    protected $fillable = [
        'tipo_de_estudio',
        'graduado',
        'fecha_de_graduacion',
        'institucion_estudio',
        'titulo_obtenido',
        'titulo_convalidado',
        'fecha_de_convalidacion',
        'resolucion_de_convalidacion',
        'pais_estudio',
        'departamento_estudio',
        'ciudad_estudio',
        'fecha_de_inicio_est',
        'fecha_de_finalizacion_est',
        'certificado_est'
    ];

    // Casts para convertir automáticamente los tipos de datos
    protected $casts = [
        'fecha_de_graduacion' => 'date',
        'fecha_de_convalidacion' => 'date',
        'fecha_de_inicio_est' => 'date',
        'fecha_de_finalizacion_est' => 'date',
        'certificado_est' => 'binary',
    ];

    // Mutador para convertir a mayúsculas la institución de estudio
    public function setInstitucionEstudioAttribute($value)
    {
        $this->attributes['institucion_estudio'] = strtoupper($value);
    }

    // Accesor para verificar si el estudio fue convalidado
    public function getEsConvalidadoAttribute()
    {
        return $this->titulo_convalidado === 'Si';
    }

    public function documento()
    {
        return $this->belongsTo(Documento::class, 'id_documento');
    }

}
