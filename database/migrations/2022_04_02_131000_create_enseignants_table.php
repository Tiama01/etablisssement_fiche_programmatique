<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enseignants', function (Blueprint $table) {
            $table->id();
            $table->string("matricule")->unique();
            $table->string("Nom");
            $table->string("Prenom");
            $table->string("Sexe");
            $table->string("mail");
            $table->string("type");
            $table->string("grade");
            $table->string("Telephone");
            $table->string("Diplome");
            $table->date("Date");
            $table->string("Rattachement");
            $table->string("abattement");
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
        Schema::dropIfExists('enseignants');
    }
};
