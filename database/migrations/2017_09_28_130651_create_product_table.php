<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pro_name');
            $table->string('pro_slug');
            $table->bigInteger('pro_price');
            $table->bigInteger('price_sales');
            $table->integer('is_sales')->default(0);
            $table->string('pro_img')->unique();
            $table->integer('description_id');
            $table->integer('brand_id');
            $table->integer('customer_id');
            $table->dateTime('time');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
