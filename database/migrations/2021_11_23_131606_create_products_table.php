<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->unsignedBigInteger('sub_category_id')->default(1);
            $table->foreign('sub_category_id')->references('id')->on('sub_categories')
                ->onDelete('cascade');
            $table->string('main_image');
            $table->string('name_ar');
            $table->string('name_en');

            $table->float('price');
            $table->float('ignor_price')->nullable();
            $table->integer('is_visible');//0 -->not vis.. 1-->visible
            $table->integer('is_sale')->nullable();//0 -->not vis.. 1-->visible

            $table->integer('is_colored');
            $table->integer('is_sized');
            $table->string('details');
            $table->unsignedBigInteger('user_id')->default(1);
            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('cascade');

            $table->softDeletes();

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
        Schema::dropIfExists('products');
    }
}
