<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Category;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
        });

        $food = new Category();
        $food->name = 'Pārtika';
        $food->save();

        $toys = new Category();
        $toys->name = 'Rotaļlietas';
        $toys->save();

        $clothes = new Category();
        $clothes->name = 'Drēbes';
        $clothes->save();

        $furniture = new Category();
        $furniture->name = 'Mēbeles';
        $furniture->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
};
