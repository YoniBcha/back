<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKebelesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kebeles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('woreda_id'); // Foreign key referencing the woreda table
            $table->foreign('woreda_id')->references('id')->on('woredas');
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
        Schema::dropIfExists('kebeles');
    }
}
