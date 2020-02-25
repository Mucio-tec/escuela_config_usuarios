<?php

namespace YourApplicationName;
namespace documentoscontroller;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class tutores extends Model
{
    
    protected $primaryKey = 'idtut';  
    protected $table = 'tutores';
    protected $fillable=['idtut','nombre','ap_emp','am_emp','edad','calle','idmun'
                            ,'num de calle','colonia','telefono','cp','correo','sexo','activo'];
    protected $date=['deleted_at'];
    public function municipios(){
        return $this->belongsTo(municipios::class, 'idmun');
}
}
