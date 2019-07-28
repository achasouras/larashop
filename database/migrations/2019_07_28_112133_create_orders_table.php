<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
        });
		Schema::create('order_items', function (Blueprint $table) {

			$table->bigIncrements('id');

			$table->bigInteger('product_id')->unsigned()->index();
			$table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');

			$table->integer('quantity');
		});

		Schema::create('order_item_attributes', function (Blueprint $table) {
			$table->bigIncrements('id');

			$table->bigInteger('order_items_id')->unsigned()->index();
			$table->foreign('order_items_id')->references('id')->on('order_items')->onDelete('cascade');

			$table->bigInteger('attribute_id')->unsigned()->index();
			$table->foreign('attribute_id')->references('id')->on('attributes')->onDelete('cascade');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
