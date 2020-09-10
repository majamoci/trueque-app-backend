<?php

use Illuminate\Database\Seeder;

class UnitMeasureTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('unit_measures')->insert([
            'name_measure' => 's',
        ]);

        DB::table('unit_measures')->insert([
            'name_measure' => 'mol',
        ]);

        DB::table('unit_measures')->insert([
            'name_measure' => 'mg',
        ]);
    }
}
