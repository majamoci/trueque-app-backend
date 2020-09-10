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
            'title' => 'Manzanas',
            'price' => 1.5,
            'address' => 'Loja',
            'category' => 'FRUT',
            'available' => 'multiple',
            'description' => 'Intercambio manzanas. 10 manzanas $1. Puedo cambiar por yucas, papas o frejoles.',
            'photos' => '{}',
        ]);
        DB::table('publications')->insert([
            'id' => 2,
            'title' => 'Brocoli',
            'price' => 0.5,
            'address' => 'Loja',
            'category' => 'HORT',
            'available' => 'multiple',
            'description' => 'brocolis frescos traidos de Zalapa',
            'photos' => '{}',
        ]);
    }
}
