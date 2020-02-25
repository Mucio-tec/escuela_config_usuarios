<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class DetalleClaves extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_claves', function (Blueprint $table) {
            $table->bigincrements('iddc');
            $table->unsignedBigInteger('idlu')->unsigned();
            $table->unsignedBigInteger('id_niv')->unsigned();
            $table->unsignedBigInteger('idh')->unsigned();
            $table->unsignedBigInteger('idprof')->unsigned();
            $table->unsignedBigInteger('idalum')->unsigned();
            $table->foreign('idlu')->references('idlu')->on('lugares');
            $table->foreign('id_niv')->references('id_niv')->on('niveles');
            $table->foreign('idh')->references('idh')->on('horarios');
            $table->foreign('idprof')->references('idprof')->on('profesores');
            $table->foreign('idalum')->references('idalum')->on('alumnos');
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
    Schema::drop('detalle_claves');
    }
}
