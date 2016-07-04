<?php

namespace LawyerSoft;

use Illuminate\Database\Eloquent\Model;

class Sexo extends Model
{
    protected $table = "sexos";
    protected $primaryKey = "idSexo"; //se agrega si el nombre de pk no es id
    protected $fillable = ['descripcion'];
}
