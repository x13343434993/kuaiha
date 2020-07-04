<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBikeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bike', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('store_id');
            $table->string('brand');
            $table->string('model');
            $table->integer('mileage');
            $table->string('chassisnumber');
            $table->string('motornumber');
            $table->datetime('buytime');
            $table->integer('quality');
            $table->integer('price');
            $table->string('memo');
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
        Schema::dropIfExists('bike');
    }
}
