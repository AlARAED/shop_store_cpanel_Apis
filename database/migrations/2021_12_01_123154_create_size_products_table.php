<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSizeProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('size_products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id')->default(1);
            $table->foreign('product_id')->references('id')->on('products')
                ->onDelete('cascade');

            $table->unsignedBigInteger('size_id')->default(1);
            $table->foreign('size_id')->references('id')->on('sizes')
                ->onDelete('cascade');

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
        Schema::dropIfExists('size_products');
    }
}
