<?php

namespace YourApplicationName;
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class profesores extends Model
{
    protected $table = 'profesores';
    protected $primaryKey = 'idprof';  
    protected $fillable=['idprof','idmun','nombre','ap_emp','am_emp','calle','num_calle','colonia'
                            ,'telefono','cp','correo','sexo','activo'];
    protected $date=['deleted_at'];
    public function municipios(){
        return $this->belongsTo(municipios::class, 'idmun');
}
}
