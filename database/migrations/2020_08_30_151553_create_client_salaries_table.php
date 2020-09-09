<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientSalariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_salaries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('matricule');
            $table->string('cni');
            $table->string('nom');
            $table->string('prenom');
            $table->string('sexe');
            $table->string('datenaiss');
            $table->string('telephone');
            $table->string('adresse');
            $table->string('email');
            $table->string('raison_sociale');
            $table->decimal('salaire');
            $table->string('nom_employeur');
            $table->string('adr_employeur');
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
        Schema::dropIfExists('client_salaries');
    }
}
