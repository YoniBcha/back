<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJoblessDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobless_documents', function (Blueprint $table) {
            $table->id();
            $table->foreign('jobless_id')->references('id')->on('jobless')->onDelete('cascade');
            $table->string('jobless_photo')->nullable();
            $table->string('jobless_identification_card')->nullable();
            $table->string('jobless_training_certificate')->nullable();
            $table->string('jobless_evidence_card')->nullable();
            $table->string('jobless_priority_evidence')->nullable();
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
        Schema::dropIfExists('jobless_documents');
    }
}
