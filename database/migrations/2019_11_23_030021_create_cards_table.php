<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use PhpParser\Node\Expr\FuncCall;

class CreateCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',100);
            $table->string('description',600);
            $table->integer('elixir');
            $table->string('range',40);
            $table->biginteger('speedId')->unsigned();
            $table->biginteger('qualityId')->unsigned();
            $table->biginteger('typeId')->unsigned();
            $table->biginteger('targetId')->unsigned();
            $table->string('imageUrl',100);
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
        Schema::dropIfExists('cards');
    }
}
