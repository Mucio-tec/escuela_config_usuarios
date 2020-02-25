<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class Lugares extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lugares', function (Blueprint $table) {
            $table->bigincrements('idlu');
            $table->unsignedBigInteger('idmun')->unsigned();
            $table->string('lugar',100);
            $table->string('calle',100);
            $table->string('colonia',100);
            $table->string('num_exterior',100);

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
     Schema::drop('lugares');
    }
}
