<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class ClaveAlumnos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clave_alumnos', function (Blueprint $table) {
            $table->bigincrements('idca');
            $table->unsignedBigInteger('iddc')->unsigned();
            $table->unsignedBigInteger('idalum')->unsigned();
            $table->foreign('idalum')->references('idalum')->on('alumnos');
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
        Schema::drop('clave_alumnos');
    }
}
