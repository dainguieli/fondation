<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dons', function (Blueprint $table) {
            $table->id();
           
            $table->string('prenom');
            $table->string('email');
            $table->string('contact');
            $table->string('nom');
            $table->string('adresse');
            $table->string('entreprise');
            $table->string('reseauMoney');
            $table->string('CategorieDeProject');
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
        Schema::dropIfExists('dons');
    }
}
