<?php

namespace documentoscontroller;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class dgrupos extends Model
{
    use SoftDeletes;
    protected $primaryKey = 'iddgrupos';
    protected $table='dgrupos';  
    protected $fillable=['iddgrupos'];
    //protected $fillable=['iddclaves','id_categoria'];

    /*public function categorias(){
        return $this->belongsTo('documentoscontroller\categorias','id_categoria','id_categoria');
    }*/
}
