<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'user_id' => 4,
            'name' => 'guineo',
            'price' => 1.0000,
            'category' => 'FRUT',
        ]);
        DB::table('products')->insert([
            'user_id' => 4,
            'name' => 'manzana',
            'price' => 1.0000,
            'category' => 'FRUT',
        ]);
        DB::table('products')->insert([
            'user_id' => 4,
            'name' => 'pera',
            'price' => 1.0000,
            'category' => 'FRUT',
        ]);
        DB::table('products')->insert([
            'user_id' => 4,
            'name' => 'zanahoria',
            'price' => 1.0000,
            'category' => 'HORT',
        ]);
    }
}
