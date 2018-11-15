<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    protected $table='productos';
    protected $fillable=['id_nombre_comp','id_cedula','nombre','tipo_prod','precio','fecha_exp','fecha_ven'];

    public function personas(){
	return $this-> hasMany('App/Usuarios','id_nombre_comp','id_cedula','id');
}

}



