<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'thegreatyamori',
            'email' => 'thegreatyamori@truequeapp.com',
            'password' => Hash::make('123456789')
        ]);
        DB::table('users')->insert([
            'name' => 'majamoci',
            'email' => 'majamoci@truequeapp.com',
            'password' => Hash::make('123456789')
        ]);
        DB::table('users')->insert([
            'name' => 'rcaiza',
            'email' => 'rcaiza@truequeapp.com',
            'password' => Hash::make('123456789')
        ]);
        DB::table('users')->insert([
            'name' => 'joselito',
            'email' => 'joselito@gmail.com',
            'password' => Hash::make('123456789')
        ]);
    }
}
