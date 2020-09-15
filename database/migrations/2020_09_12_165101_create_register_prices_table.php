<?php
//use Carbon\Carbon;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegisterPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('register_prices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('system_products_id')->constrained('register_system_products');
            $table->foreignId('market_id')->constrained('register_markets');
            $table->foreignId('unit_measures_id')->constrained('unit_measures');
            //$date = Carbon::now();
            //$date = $date->format('d-m-Y');
            $table->date('date_price');
            $table->decimal('price_prod', 13,4);
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
        Schema::dropIfExists('register_prices');
    }
}
