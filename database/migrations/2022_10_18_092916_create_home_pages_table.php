<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_pages', function (Blueprint $table) {
            $table->id();

            $table->string('top_slider_img1')->nullable();
            $table->string('top_slider_text1')->nullable();
            $table->string('top_slider_img2')->nullable();
            $table->string('top_slider_text2')->nullable();
            $table->string('top_slider_img3')->nullable();
            $table->string('top_slider_text3')->nullable();
            $table->string('top_scroll_text')->nullable();
            $table->string('top_scroll_text2')->nullable();
            $table->string('top_scroll_text3')->nullable();
            $table->string('top_scroll_text4')->nullable();
            $table->string('top_scroll_text5')->nullable();

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
        Schema::dropIfExists('home_pages');
    }
}
