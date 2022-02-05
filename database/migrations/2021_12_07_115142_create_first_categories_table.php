<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Model\FirstCategory;

class CreateFirstCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('first_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name_ar');
            $table->string('name_en');
            $table->string('category_id');
            $table->string('view')->default(0);

            $table->softDeletes();
            $table->timestamps();
        });

        FirstCategory::create([
            // 'name' => $data['name'],
            'name_ar' => 'ملابس أطفال',
            'name_en' => ' children clothes ',
            'category_id' => '1',
        ]);

        FirstCategory::create([
            // 'name' => $data['name'],
            'name_ar' => 'ملابس نساء',
            'name_en' => 'women clothes',
            'category_id' => '1',
        ]);


        FirstCategory::create([
            // 'name' => $data['name'],
            'name_ar' => 'ملابس رجال',
            'name_en' => 'men clothes',
            'category_id' => '1',
        ]);




    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('first_categories');
    }
}
