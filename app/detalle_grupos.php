<?php

namespace documentoscontroller;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class detalle_grupos extends Model
{
    use SoftDeletes;
    protected $primaryKey = 'id_dgrupo';
    protected $table='detalle_grupos'; 
    protected $fillable=['id_dgrupo','id_niv','idmod','id_categoria','idempresa','id_grupo','idh','idalum','iddgrupos','activo'];
   

    public function niveles(){
        return $this->belongsTo('documentoscontroller\niveles','id_niv','id_niv');
    }
    public function modulos(){
        return $this->belongsTo('documentoscontroller\modulos','idmod','idmod');
    }
    public function categorias(){
        return $this->belongsTo('documentoscontroller\categorias','id_categoria','id_categoria');
    }
    public function empresas(){
        return $this->belongsTo('documentoscontroller\empresas','idempresa','idempresa');
    }
    public function grupos(){
        return $this->belongsTo('documentoscontroller\grupos','id_grupo','id_grupo');
    }
    public function horarios(){
        return $this->belongsTo('documentoscontroller\horarios','idh','idh');
    }
    public function alumnos(){
        return $this->belongsTo('documentoscontroller\alumnos','idalum','idalum');
    }
    public function dgrupos(){
        return $this->belongsTo('documentoscontroller\dgrupos','iddgrupos','iddgrupos');
    }

}