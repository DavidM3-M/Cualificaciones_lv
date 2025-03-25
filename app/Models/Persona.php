<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    // Definir la tabla en la BD (opcional si sigue la convención)
    protected $table = 'personas';

    // Definir la clave primaria
    protected $primaryKey = 'id_Persona';

    // Permitir asignación masiva en estos campos
    protected $fillable = [
        'tipo_de_identificacion',
        'identificacion',
        'primer_nombre',
        'segundo_nombre',
        'primer_apellido',
        'segundo_apellido',
        'genero',
        'estado_civil',
        'categoria_libreta_militar',
        'numero_libreta_militar',
        'numero_distrito_militar'
    ];

    // Laravel gestiona automáticamente los timestamps (created_at y updated_at)
    public $timestamps = true;

    // Mutador para asegurar que los nombres y apellidos comiencen con mayúscula
    public function setPrimerNombreAttribute($value)
    {
        $this->attributes['primer_nombre'] = ucfirst(strtolower($value));
    }

    public function setSegundoNombreAttribute($value)
    {
        $this->attributes['segundo_nombre'] = ucfirst(strtolower($value));
    }

    public function setPrimerApellidoAttribute($value)
    {
        $this->attributes['primer_apellido'] = ucfirst(strtolower($value));
    }

    public function setSegundoApellidoAttribute($value)
    {
        $this->attributes['segundo_apellido'] = ucfirst(strtolower($value));
    }

    // Accesor para obtener nombre completo
    public function getNombreCompletoAttribute()
    {
        return "{$this->primer_nombre} {$this->segundo_nombre} {$this->primer_apellido} {$this->segundo_apellido}";
    }

    public function informacionContacto()
    {
        return $this->hasOne(InformacionContacto::class, 'id_persona');
    }

}
