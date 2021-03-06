<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompteBloquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compte_bloques', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('client_salaries_id')->unsigned();
            $table->foreign('client_salaries_id')
            ->references('id')->on('client_salaries');
            $table->integer('client_non_salaries_id')->unsigned();
            $table->foreign('client_non_salaries_id')
            ->references('id')->on('client_non_salaries');
            $table->integer('entreprises_id')->unsigned();
            $table->foreign('entreprises_id')
            ->references('id')->on('entreprises');
            $table->string('numero');
            $table->string('$rib');
            $table->decimal('solde');
            $table->string('dateOuverture');
            $table->decimal('fraisOuverture');
            $table->decimal('remuneration');
            $table->string('dateDebut');
            $table->string('dateFin');
            
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
        Schema::dropIfExists('compte_bloques');
    }
}
