<?php

use Illuminate\Database\Seeder;

class RegisterMarketSectorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('register_market_sectors')->insert([
            'name_str' => 'El Arenal',
            'direction_str' => 'AV Unidad nacional y Quito',
        ]);

        DB::table('register_market_sectors')->insert([
            'name_str' => 'El madrugador',
            'direction_str' => 'Av Belisario Quevedo',
        ]);
        DB::table('register_market_sectors')->insert([
            'name_str' => '4 de Mayo',
            'direction_str' => 'Av Napo y Guayaquil',
        ]);
    }
}
