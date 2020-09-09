<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompteCourantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compte_courants', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('client_salaries_id')->unsigned();
            $table->foreign('client_salaries_id')
            ->references('id')->on('client_salaries');
            $table->string('numero');
            $table->string('$rib');
            $table->decimal('solde');
            $table->string('dateOuverture');
            $table->decimal('agios');           
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
        Schema::dropIfExists('compte_courants');
    }
}
