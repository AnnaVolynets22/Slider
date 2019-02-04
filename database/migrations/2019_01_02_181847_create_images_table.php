<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('title')->nullable(false);
            $table->enum('status', ['Enabled', 'Disabled']);
            $table->text('description')->nullable();
            $table->string('file')->nullable();
            $table->integer('slider_id')->unsigned()->nullable();
            $table->foreign('slider_id')->references('id')->on('sliders')->onDelete('cascade')->onUpdate('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('images');
    }
}
