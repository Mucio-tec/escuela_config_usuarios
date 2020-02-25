<?php

namespace YourApplicationName;
namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class alumnos extends Model
{
  
    protected $primaryKey = 'idalum';

    protected $table = 'alumnos';

    protected $fillable = [
        'idmun',
        'nombre',
        'ap_emp',
        'am_emp',
        'edad',
        'calle',
        'num_calle',
        'colonia',
        'telefono',
        'cp',
        'correo',
        'sexo',
        'activo',
    ];
    protected $date=['deleted_at'];

    public function municipios(){
        return $this->belongsTo(municipios::class, 'idmun');
    }
}
