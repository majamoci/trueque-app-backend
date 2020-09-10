<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegisterMarketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('register_markets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('marketsectors_id')->constrained('register_market_sectors');
            $table->foreignId('markettypes_id')->constrained('markettypes');
            $table->string('name_market', 100);
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
        Schema::dropIfExists('register_markets');
    }
}
