<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
class Calificaciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calificaciones', function (Blueprint $table) {
            $table->bigincrements('idcal');
            $table->unsignedBigInteger('iddc')->unsigned();
            $table->string('calificacion',40);
            $table->string('evaluacion',40);
            $table->foreign('iddc')->references('iddc')->on('detalle_claves');
            $table->rememberToken();
            $table->softDeletes();
            $table->timestamps();
            
});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('calificaciones');
    }
}
