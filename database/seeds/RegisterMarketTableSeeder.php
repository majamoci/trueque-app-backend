<?php

use Illuminate\Database\Seeder;

class RegisterMarketTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('register_markets')->insert([
            'marketsectors_id' => 1,
            'markettypes_id' => 3,
            'name_market' => 'El Salto',            
        ]);

        DB::table('register_markets')->insert([
            'marketsectors_id' => 2,
            'markettypes_id' => 1,
            'name_market' => 'La Carolina',            
        ]);

        DB::table('register_markets')->insert([
            'marketsectors_id' => 3,
            'markettypes_id' => 2,
            'name_market' => 'Iñaquito',            
        ]);
    }
}
