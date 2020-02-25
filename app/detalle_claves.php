<?php

namespace documentoscontroller;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class detalle_claves extends Model
{
    use SoftDeletes;
    protected $primaryKey = 'iddc';
    protected $table='detalle_claves';  
    protected $fillable=['iddc','idlu','id_niv','idh','idprof','iddclaves','idempresas','id_grupo','id_categoria'];


    public function lugares(){
        return $this->belongsTo('documentoscontroller\lugares','idlu','idlu');
    }
    public function niveles(){
        return $this->belongsTo('documentoscontroller\niveles','id_niv','id_niv');
    }
    public function horarios(){
        return $this->belongsTo('documentoscontroller\horarios','idh','idh');
    }
    public function profesores(){
        return $this->belongsTo('documentoscontroller\profesores','idprof','idprof');
    }
    public function dclaves(){
        return $this->belongsTo('documentoscontroller\dclaves','iddclaves','iddclaves');
    }
    public function empresas(){
        return $this->belongsTo('documentoscontroller\empresas','idempresa','idempresa');
    }
    public function dgrupos(){
        return $this->belongsTo('documentoscontroller\grupos','id_grupo','id_grupo');
    }
    public function categorias(){
        return $this->belongsTo('documentoscontroller\categorias','id_categoria','id_categoria');
    }
}
