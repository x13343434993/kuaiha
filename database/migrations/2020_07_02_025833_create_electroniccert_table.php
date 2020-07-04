<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateElectroniccertTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('electroniccert', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->integer('user_id');
            $table->integer('store_id');
            $table->integer('bike_id')->nullable();
            $table->integer('battery_id')->nullable();
            $table->string('otherdetail')->nullable();
            $table->integer('price')->nullable();
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
        Schema::dropIfExists('electroniccert');
    }
}
