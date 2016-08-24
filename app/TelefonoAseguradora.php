<?php

namespace LawyerSoft;

use Illuminate\Database\Eloquent\Model;

class TelefonoAseguradora extends Model
{
    protected $table = "telefono_aseguradoras";
    protected $primaryKey = "idTelefonoAseguradora"; //se agrega si el nombre de pk no es id
    protected $fillable = ['numero','idAseguradoraTercero'];
}
