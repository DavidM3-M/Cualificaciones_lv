<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class ProduccionAcademica extends Model
{
    use HasFactory;

    protected $table = 'producciones_academicas';
    protected $primaryKey = 'id_produccion_academica';
    public $timestamps = true;

    protected $fillable = [
        'tipo_de_produccion',
        'titulo_de_produccion',
        'autores',
        'fecha_de_publicacion',
        'indexado_db',
        'base_de_datos',
        'institucion_pa',
        'pais_pa',
        'departamento_pa',
        'ciudad_pa',
        'tipo_de_participacion',
        'archivo_de_produccion'
    ];

    // Accesor para obtener la URL del archivo de producción si se almacena en el sistema de archivos
    public function getArchivoDeProduccionUrlAttribute()
    {
        return $this->archivo_de_produccion ? Storage::url($this->archivo_de_produccion) : null;
    }

    public function documento()
    {
        return $this->belongsTo(Documento::class, 'id_documento');
    }

}

