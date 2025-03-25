<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Idioma extends Model
{
    use HasFactory;

    protected $table = 'idiomas';
    protected $primaryKey = 'id_idioma';
    public $timestamps = true;

    protected $fillable = [
        'idioma',
        'institucion_idioma',
        'fecha_de_certificado_idioma',
        'certificado_de_idioma',
        'nivel_de_idioma'
    ];

    // Accesor para obtener la URL del nivel de idioma si se almacena en el sistema de archivos
    public function getNivelDeIdiomaUrlAttribute()
    {
        return $this->nivel_de_idioma ? Storage::url($this->nivel_de_idioma) : null;
    }

    public function documento()
    
    {
        return $this->belongsTo(Documento::class, 'id_documento');
    }

}

