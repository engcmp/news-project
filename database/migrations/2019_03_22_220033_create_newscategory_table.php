<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewscategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newscategory', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('category_id')->unsigned();
			$table->integer('news_id')->unsigned();
			$table->foreign('category_id')->references('id')->on('category')->onDelete('cascade');
	        $table->foreign('news_id')->references('id')->on('news')->onDelete('cascade');        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('newscategory');
    }
}
