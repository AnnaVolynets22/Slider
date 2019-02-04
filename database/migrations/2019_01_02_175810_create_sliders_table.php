<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sliders', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('title')->nullable(false);
            $table->enum('status', ['Enabled', 'Disabled']);
            $table->text('description')->nullable();
            $table->dateTime('start_date')->nullable();
            $table->dateTime('end_date')->nullable();
            $table->boolean('show_dots')->nullable();
            $table->boolean('infinite')->nullable();
            $table->integer('speed')->nullable();
            $table->integer('slides_to_show')->nullable();
            $table->boolean('adaptive_height')->nullable();
            $table->boolean('fade')->nullable();
            $table->string('cssEase')->nullable();
            $table->integer('slides_to_scroll')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sliders');
    }
}
