<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
			$table->string('nome',255);
			$table->integer('cidade_id')->unsigned();
			$table->foreign('cidade_id')->references('id')->on('cidades');
			$table->integer('estado_id')->unsigned();
			$table->foreign('estado_id')->references('id')->on('estados');
			$table->integer('hobbie_id')->unsigned();
			$table->foreign('hobbie_id')->references('id')->on('hobbies');
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
        Schema::dropIfExists('clientes');
    }
}
