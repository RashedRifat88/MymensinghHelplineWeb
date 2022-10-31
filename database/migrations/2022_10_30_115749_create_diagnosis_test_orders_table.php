<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiagnosisTestOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diagnosis_test_orders', function (Blueprint $table) {
            $table->id();

            $table->string('pat_id');
            $table->string('pat_name')->nullable();
            $table->string('pat_mobile')->nullable();
            $table->string('hospital_name')->nullable();
            $table->string('test_list')->nullable();
            $table->string('test_price_list')->nullable();
            $table->string('test_prescription')->nullable();
            $table->string('has_prescription')->nullable();

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
        Schema::dropIfExists('diagnosis_test_orders');
    }
}
