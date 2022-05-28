<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Warehouse;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('warehouses', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
        });
        $imanta = new Warehouse();
        $imanta->name = 'Imanta';
        $imanta->save();

        $teika = new Warehouse();
        $teika->name = 'Teika';
        $teika->save();

        $jurmala = new Warehouse();
        $jurmala->name = 'Jūrmala';
        $jurmala->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('warehouses');
    }
};
