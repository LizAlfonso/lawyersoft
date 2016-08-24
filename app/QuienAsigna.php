<?php

namespace LawyerSoft;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class QuienAsigna extends Model
{
	use SoftDeletes;

    protected $table = "quien_asignas";
    protected $primaryKey = "idQuienAsigna"; //se agrega si el nombre de pk no es id
    protected $fillable = ['idCiudad','idPersona'];
    protected $dates = ['deleted_at'];   //para deshabilitar el registro
}
