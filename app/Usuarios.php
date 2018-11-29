<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
	protected $table= 'usuarios';
    protected $primarykey = 'id';
    
    protected $fillable=['nombre_comp','cedula','fecha_nac','fecha_reg','correo','avatar'];

    public function users(){
	return $this->belongsTo('App/User','id');
}


    //public function (){
	//return $this-> belongsTo('App/Productos','id_nombre_comp','id_cedula');
}




