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
            $table->integer('parent_id')->default(0)->index();
            $table->timestamps();
        });

        Schema::create('attributes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('position');
            $table->boolean('parent_required');
            $table->boolean('variation_required');
			$table->timestamps();
        });

        // Sleep() solves racing conditions occurring in my local :)
        Schema::create('product_attributes', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('value');

            $table->bigInteger('product_id')->unsigned()->index();
			$table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');

			$table->bigInteger('attribute_id')->unsigned()->index();
			$table->foreign('attribute_id')->references('id')->on('attributes')->onDelete('cascade');

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
        Schema::dropIfExists('product_attributes');
        Schema::dropIfExists('attributes');
        Schema::dropIfExists('products');
    }
}
