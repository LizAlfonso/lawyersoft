<?php

namespace LawyerSoft;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    protected $table = "generos";
    protected $primaryKey = "idGenero"; //se agrega si el nombre de pk no es id
    protected $fillable = ['nombre'];
}
