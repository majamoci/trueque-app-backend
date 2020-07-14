<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'ADMIN',
            'user_id' => 1
        ]);
        DB::table('roles')->insert([
            'name' => 'ADMIN',
            'user_id' => 2
        ]);
        DB::table('roles')->insert([
            'name' => 'ADMIN',
            'user_id' => 3
        ]);
    }
}
