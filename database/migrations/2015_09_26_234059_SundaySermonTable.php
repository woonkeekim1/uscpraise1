<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SundaySermonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('SundaySermon', function (Blueprint $table) {
            $table->increments('id');
			$table->String('title');
			$table->text('body');
			$table->String('audio');
			$table->Integer('createdBy')->length(10)->unsigned();
			$table->Datetime('sermonDate');
            $table->timestamps();
            $table->foreign('createdBy')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('SundaySermon');
    }
}
