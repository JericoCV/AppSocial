<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfertanteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ofertante', function (Blueprint $table) {
            $table->id();
            $table->integer('userid');
            $table->string("nombre");
            $table->string("ruc");
            $table->string("tipo");
            $table->string("propietario");
            $table->string("estado")->nullable();
            $table->string("ubicacion");
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
        Schema::dropIfExists('ofertante');
    }
}
