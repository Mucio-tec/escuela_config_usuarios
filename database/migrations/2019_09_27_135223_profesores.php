<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class Profesores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profesores', function (Blueprint $table) {
            $table->bigincrements('idprof');
            $table->unsignedBigInteger('idmun')->unsigned();
            $table->string('nombre',40);
            $table->string('ap_emp',40);
            $table->string('am_emp',40);
            $table->string('edad',40);
            $table->string('calle',100);
            $table->string('num_calle',100);
            $table->string('colonia',100);
            $table->string('telefono',20);
            $table->string('cp',5);
            $table->string('correo',100);
            $table->string('sexo',50);
            $table->foreign('idmun')->references('idmun')->on('municipios');
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
        Schema::drop('profesores');
    }
}
