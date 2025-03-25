<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Experiencia extends Model
{
    use HasFactory;

    protected $table = 'experiencias';
    protected $primaryKey = 'id_experiencia';
    public $timestamps = true;

    protected $fillable = [
        'tipo_de_experiencia',
        'experiencia_obtenida_ADC',
        'institucion_exp',
        'trabajo_actual',
        'cargo',
        'intensidad',
        'fecha_de_inicio_exp',
        'fecha_de_finalizacion_exp',
        'certificado_exp'
    ];

    // Accesor para obtener la URL del certificado si se almacena en el sistema de archivos
    public function getCertificadoExpUrlAttribute()
    {
        return $this->certificado_exp ? Storage::url($this->certificado_exp) : null;
    }

    public function documento()
    {
        return $this->belongsTo(Documento::class, 'id_documento');
    }

}
