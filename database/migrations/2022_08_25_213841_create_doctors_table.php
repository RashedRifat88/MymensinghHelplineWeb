<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('bmdc_no')->nullable();
            $table->string('phone')->nullable();
            $table->string('speciality')->nullable();
            $table->string('degree')->nullable();
            $table->string('fee')->nullable();
            $table->string('experience')->nullable();
            $table->string('available_days')->nullable();
            $table->string('hospital')->nullable();
            $table->string('room')->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('doctors');
    }
}
