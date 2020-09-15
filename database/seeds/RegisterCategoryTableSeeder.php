<?php

use Illuminate\Database\Seeder;

class RegisterCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('register_categories')->insert([
            'name_gtgry' => 'Cereales',
            'description_gtgry' => 'Productos cultivadas por su grano',
        ]);
        
        DB::table('register_categories')->insert([
            'name_gtgry' => 'Hortalizas',
            'description_gtgry' => 'Cultivadas generalmente en huertos o regadíos, incluye las verduras y las legumbres',
        ]);

        DB::table('register_categories')->insert([
            'name_gtgry' => 'Fruta',
            'description_gtgry' => 'Por su sabor generalmente dulce-acidulado, su aroma intenso y agradable y sus propiedades nutritivas',
        ]);
    }
}
