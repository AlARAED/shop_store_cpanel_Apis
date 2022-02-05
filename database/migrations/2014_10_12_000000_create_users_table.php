<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\User;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('role')->default(2);
            $table->string('image')->default('user.png');
            $table->string('imagestore')->default('user.png');
            $table->unsignedBigInteger('category_id')->default(1);
            $table->foreign('category_id')->references('id')->on('categories')
                ->onDelete('cascade');
            $table->string('is_sale')->default(0);
            $table->string('is_block')->default(0);//ازا تم تبليك ما بينعرض محله على التطبيق
            $table->integer('discount_value')->nullable();
            $table->string('xxx_xxx_xxx')->default();

            $table->unsignedBigInteger('governorates_id')->default(1);
            $table->foreign('governorates_id')->references('id')->on('governorates')
                ->onDelete('cascade');

            $table->unsignedBigInteger('regions_id')->default(1);
            $table->foreign('regions_id')->references('id')->on('regions')
                ->onDelete('cascade');

            $table->unsignedBigInteger('blocks_id')->default(1);
            $table->foreign('blocks_id')->references('id')->on('blocks')
                ->onDelete('cascade');







            $table->rememberToken();
            $table->timestamps();
        });


        User::create([
            // 'name' => $data['name'],
            'name' => 'BRAND SHOP',
            'email' => 'BRAND@B.com',
            'password' => Hash::make('123456'),
            'role' => '1',
            'image' => 'user.png',
            'phone' => 'xxx_xxx_xxx',
            'governorates_id' => '1',
            'regions_id' => '1',
            'blocks_id' => '1',




        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
