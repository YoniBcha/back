<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnterprisesTable extends Migration
{
    public function up()
    {
        Schema::create('enterprises', function (Blueprint $table) {
            $table->id();
            $table->string('enterprise_name');
            $table->string('enterprise_role')->nullable();
            $table->string('enterprise_status');
            $table->string('enterprise_type');
            $table->unsignedBigInteger('jobless_id')->nullable(); // Manager from Jobless table
            $table->string('enterprise_sector');
            $table->string('enterprise_phone_number')->nullable();
            $table->string('enterprise_email')->nullable();
            $table->string('enterprise_username')->unique();
            $table->string('enterprise_password');
            $table->foreignId('city_id')->nullable()->constrained('cities')->onDelete('set null');
            $table->foreignId('subcity_id')->nullable()->constrained('subcities')->onDelete('set null');
            $table->foreignId('woreda_id')->nullable()->constrained('woredas')->onDelete('set null');
            $table->foreignId('kebele_id')->nullable()->constrained('kebeles')->onDelete('set null');
            $table->foreign('jobless_id')->references('id')->on('jobless')->onDelete('set null');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('enterprises');
    }
}
