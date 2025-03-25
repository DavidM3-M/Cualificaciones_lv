<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentoSoporte extends Model
{
    use HasFactory;

    // Nombre de la tabla en la base de datos
    protected $table = 'documentos_soporte';

    // Clave primaria
    protected $primaryKey = 'id_documento_soporte';

    // Habilitar timestamps para `created_at` y `updated_at`
    public $timestamps = true;

    // Definir los campos que se pueden asignar de manera masiva
    protected $fillable = [
        'documento_identidad',
        'tarjeta_servicio_militar'
    ];

    // Casts para convertir automáticamente los tipos de datos
    protected $casts = [
        'documento_identidad' => 'binary',
        'tarjeta_servicio_militar' => 'binary',
    ];

    public function documento()
    {
        return $this->belongsTo(Documento::class, 'id_documento');
    }

}
