<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvalutionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evalution', function (Blueprint $table) {
            $table->id();
            $table->integer('electroniccert_id')->nullable();
            $table->integer('user_id');
            $table->integer('evaluser_id');
            $table->integer('comfortable');
            $table->integer('pricelevel')->nullable();
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
        Schema::dropIfExists('evalution');
    }
}
