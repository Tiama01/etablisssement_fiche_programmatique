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
        Schema::create('modules', function (Blueprint $table) {
            $table->id();
            $table->string("codemod")->nullable();
            $table->string("libmod");
            $table->string("credit");
            $table->string("vh_ct");
            $table->string("vh_td");
            $table->string("vh_tp");
            $table->string("poids");
            $table->foreignId('enseignant_id')->constrained();
            $table->foreignId('ue_id')->constrained();
            $table->foreignId('semestre_id')->constrained();
            // $table->string("codeUE");
            // $table->string("codeEns");
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
        Schema::dropIfExists('modules');
    }
};
