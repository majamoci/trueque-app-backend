<?php

use Illuminate\Database\Seeder;

class MarkettypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('markettypes')->insert([
            'name_tp' => 'Mayoristas',
        ]);
        
        DB::table('markettypes')->insert([
            'name_tp' => 'Intermedios',
        ]);

        DB::table('markettypes')->insert([
            'name_tp' => 'Provinciales',
        ]);
    }
}
