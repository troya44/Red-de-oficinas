<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'primer_apellido',
        'segundo_apellido',
        'rol',
        'fecha_nacimiento',
        'dni',
        'email',
        'oficina_id'
    ];

    protected $dates = ['fecha_nacimiento'];

    public function oficina()
    {
        return $this->belongsTo(Oficinas::class, 'oficina_id');
    }
}
