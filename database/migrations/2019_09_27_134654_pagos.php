<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class Pagos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagos', function (Blueprint $table) {
            $table->bigincrements('idp');
            $table->unsignedBigInteger('idalum')->unsigned();
            $table->string('costo',40);
            $table->string('Folio',40);
            $table->string('fecha',40);
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
        Schema::drop('pagos');
    }
}
