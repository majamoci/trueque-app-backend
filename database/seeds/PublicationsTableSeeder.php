<?php

use Illuminate\Database\Seeder;

class PublicationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('publications')->insert([
            'id' => 1,
            'user_id' => 1,
            'product_id' => 1,
            'title' => 'Manzanas',
            'address' => 'Loja',
            'available' => 'multiple',
            'description' => 'Intercambio manzanas. 10 manzanas $1. Puedo cambiar por yucas, papas o frejoles.',
            'photos' => '{}',
            'status' => 'published'
        ]);
   
    }
}
