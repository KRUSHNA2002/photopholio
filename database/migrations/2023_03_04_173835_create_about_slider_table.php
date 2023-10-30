<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutSliderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_slider', function (Blueprint $table) {
            $table->id('about_slider_id');
            $table->string('slider_name',100);
            $table->text('slider_desc');
            $table->text('slider_image');
            $table->string('slider_ceo',100);
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
        Schema::dropIfExists('about_slider');
    }
}
