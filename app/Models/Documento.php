<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    use HasFactory;

    // Definir la tabla en la BD 
    protected $table = 'documentos';

    // Definir la clave primaria
    protected $primaryKey = 'id_documento';

    // Permitir asignación masiva en estos campos
    protected $fillable = [
        'fecha_actualizacion_doc',
        'id_estudio',
        'id_documento_soporte',
        'id_idioma',
        'id_produccion_academica',
        'id_experiencia'
    ];

    // Desactivar timestamps si la tabla no tiene `created_at` y `updated_at`
    public $timestamps = false;

    // Definir relaciones con otras tablas
    public function estudio()
    {
        return $this->belongsTo(Estudio::class, 'id_estudio');
    }

    public function documentoSoporte()
    {
        return $this->belongsTo(DocumentoSoporte::class, 'id_documento_soporte');
    }

    public function idioma()
    {
        return $this->belongsTo(Idioma::class, 'id_idioma');
    }

    public function produccionAcademica()
    {
        return $this->belongsTo(ProduccionAcademica::class, 'id_produccion_academica');
    }

    public function experiencia()
    {
        return $this->belongsTo(Experiencia::class, 'id_experiencia');
    }
}

