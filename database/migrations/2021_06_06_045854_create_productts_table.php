<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProducttsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productts', function (Blueprint $table) {
            $table->increments('id');
            $table->UnsignedInteger('id_category');
            $table->string('reference');
            $table->string('name');
            $table->text('description');
            $table->string('state');
            $table->decimal('price');
            $table->string('picture');
            $table->integer('rate');
        
            $table->timestamps();

            $table->foreign('id_category')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productts');
    }
}
