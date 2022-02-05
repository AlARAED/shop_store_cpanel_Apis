<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('first_name');
            $table->string('second_name');
            $table->string('phone');
            $table->string('email')->nullable();
            $table->string('long');
            $table->string('tan');
            $table->string('address');
            $table->float('total_price');
            $table->unsignedBigInteger('governorates_id')->default(1);
            $table->foreign('governorates_id')->references('id')->on('governorates')
                ->onDelete('cascade');
            $table->unsignedBigInteger('regions_id')->default(1);
            $table->foreign('regions_id')->references('id')->on('regions')
                ->onDelete('cascade');
            $table->unsignedBigInteger('blocks_id')->default(1);
            $table->foreign('blocks_id')->references('id')->on('blocks')
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
        Schema::dropIfExists('orders');
    }
}
