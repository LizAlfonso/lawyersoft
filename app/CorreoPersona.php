<?php

namespace LawyerSoft;

use Illuminate\Database\Eloquent\Model;

class CorreoPersona extends Model
{
    protected $table = "correo_personas";
    protected $primaryKey = "idCorreoPersona";
    protected $fillable = ['descripcion'];
}
