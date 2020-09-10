<?php

use Illuminate\Database\Seeder;

class RegisterSystemProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('register_system_products')->insert([
            'categories_id' => 2,
            'name_sys_prod' => 'Zanahoria',
        ]);

        DB::table('register_system_products')->insert([
            'categories_id' => 1,
            'name_sys_prod' => 'Arroz',
        ]);

        DB::table('register_system_products')->insert([
            'categories_id' => 3,
            'name_sys_prod' => 'Manzana',
        ]);
    }
}
