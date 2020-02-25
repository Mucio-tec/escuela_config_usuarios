<?php

namespace documentoscontroller;

use Illuminate\Database\Eloquent\Model;

class documentos extends Model
{
    protected $table = 'documentos';

    protected $primaryKey = 'idd';  

    protected $fillable=['idd',
    'documento',
    'ruta',
    'fecha',
    'descripcion',
];

    protected $date=['deleted_at'];
}

