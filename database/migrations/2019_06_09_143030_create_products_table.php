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
          $table->string('imgProduct', 200)->nullable()->default('default.png');
          $table->unsignedBigInteger('size_id')->nullable();;
          $table->float('price');
          $table->integer('cantProd')->default(1);
          $table->unsignedBigInteger('league_id')->nullable();;
          $table->unsignedBigInteger('brand_id')->nullable();;
          $table->timestamps();
          $table->foreign('league_id')->references('id')->on('leagues');
          $table->foreign('brand_id')->references('id')->on('brands');
          $table->foreign('size_id')->references('id')->on('sizes');
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
