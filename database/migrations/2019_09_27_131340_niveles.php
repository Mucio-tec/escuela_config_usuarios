<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Niveles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('niveles', function (Blueprint $table) {
            $table->bigincrements('id_niv');
            $table->string('Nivel',40);
            $table->rememberToken();
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
        Schema::drop('niveles');
    }
}
