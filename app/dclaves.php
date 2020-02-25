<?php

namespace documentoscontroller;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class dclaves extends Model
{
    use SoftDeletes;
    protected $primaryKey = 'iddclaves';
    protected $table='dclaves';  
    protected $fillable=['iddclaves'];
    //protected $fillable=['iddclaves','id_categoria'];

    /*public function categorias(){
        return $this->belongsTo('documentoscontroller\categorias','id_categoria','id_categoria');
    }*/
}
