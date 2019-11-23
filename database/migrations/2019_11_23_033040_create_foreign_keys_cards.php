<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignKeysCards extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cards', function (Blueprint $table){
            $table->foreign('speedId')->references('id')->on('speeds')->onDelete('cascade');
            $table->foreign('qualityId')->references('id')->on('qualities')->onDelete('cascade');
            $table->foreign('typeId')->references('id')->on('types')->onDelete('cascade');
            $table->foreign('targetId')->references('id')->on('targets')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cards');
    }
}
