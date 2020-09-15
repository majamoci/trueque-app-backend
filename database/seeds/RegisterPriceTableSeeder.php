<?php

use Illuminate\Database\Seeder;

class RegisterPriceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('register_prices')->insert([
            'system_products_id' => 2,
            'market_id' => 1,
            'unit_measures_id' => 4,
            'date_price' => '2020-09-12',
            'price_prod' => 1.3,
        ]);
    }
}
