<?php

namespace LawyerSoft;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vehiculo extends Model
{
    use SoftDeletes;

    protected $table = "vehiculos";
    protected $primaryKey = "idVehiculo"; //se agrega si el nombre de pk no es id
    protected $fillable = ['placa','marca','modelo','color'];
    protected $dates = ['deleted_at'];   //para deshabilitar el registro
}
