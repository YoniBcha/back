<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJoblessTable extends Migration
{
    public function up()
    {
        Schema::create('jobless', function (Blueprint $table) {
            $table->id();
            $table->string('jobless_username')->unique(); // Added username with unique constraint
            $table->string('jobless_password'); 
            $table->string('jobless_full_name');
            $table->string('jobless_grandfather_name')->nullable();
            $table->integer('jobless_age');
            $table->enum('jobless_sex', ['Male', 'Female']);
            $table->enum('jobless_status', ['Pending', 'Accepted', 'Failed'])->default('Pending'); // Set default value            $table->integer('jobless_age');
            $table->string('jobless_kebele');
            $table->string('jobless_woreda');
            $table->string('jobless_city');
            $table->string('jobless_subcity');
            $table->string('jobless_role')->default('jobless');
            $table->string('jobless_phonenumber');
            $table->string('jobless_email')->nullable();
            $table->string('jobless_profession');
            $table->string('jobless_housenumber');
            $table->integer('jobless_familysize');
            $table->string('jobless_livingstatus');
            $table->string('jobless_birthplace');
            $table->string('jobless_family_status');
            $table->string('jobless_martial_status');
            $table->string('jobless_disability_status');
            $table->text('jobless_reason_tocome');
            $table->timestamps(); 
        });
    }

    public function down()
    {
        Schema::dropIfExists('jobless');
    }
}