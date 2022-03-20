<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class estudiante extends Model
{
    use HasFactory;

    public $table='estudiantes';

    public $timestamps=false;
    protected $fillable=[
        'carne','nombre','alias','foto', 'correo','fecha_nacimiento', 'telefono', 'id_categoria'
    ];

    protected $primaryKey='carne';
}
