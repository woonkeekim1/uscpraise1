<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGalleryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
    	Schema::create('Gallery', function (Blueprint $table) {
    		$table->increments('id');
    		$table->String('title');
    		$table->text('body');
    		$table->Integer('createdBy')->length(10)->unsigned();
    		$table->String('category');
    		$table->String('header');
    		$table->String('image');
    		$table->String('smallImage');
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
        //
        Schema::drop('Gallery');
    }
}
