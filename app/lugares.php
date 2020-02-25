<?php

namespace YourApplicationName;
namespace documentoscontroller;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class lugares extends Model
{
    
    protected $table = 'lugares';

    protected $primaryKey = 'idlu';

    protected $fillable=[
        'idlu',
        'idmun',
        'lugar',
        'calle',
        'colonia',
        'num_exterior',
        'activo'
    ];

    protected $date=['deleted_at'];
    
    public function municipios(){
        return $this->belongsTo(municipios::class, 'idmun');
    }
}
