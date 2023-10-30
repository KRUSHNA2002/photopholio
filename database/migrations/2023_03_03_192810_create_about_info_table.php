<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_info', function (Blueprint $table) {
            $table->id('about_info_id');
            $table->string('about_name',100);
            $table->string('about_title',100);
            $table->string('about_dob',100);
            $table->string('about_website',300);
            $table->string('about_age',20);
            $table->string('about_email',100);
            $table->string('about_mobile',30);
            $table->string('about_city',100);
            $table->text('about_image');
            $table->text('about_desc');
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
        Schema::dropIfExists('about_info');
    }
}
