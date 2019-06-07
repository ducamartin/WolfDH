<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('products', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('name');
          $table->text('description');
          $table->string('size')->nullable();;
          $table->float('price');
          $table->unsignedBigInteger('league_id')->nullable();;
          $table->unsignedBigInteger('brand_id')->nullable();;
          $table->timestamps();
          $table->foreign('league_id')->references('id')->on('leagues');
          $table->foreign('brand_id')->references('id')->on('brands');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
