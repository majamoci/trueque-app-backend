<?php

use Illuminate\Database\Seeder;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profiles')->insert([
            'user_id' => 1,
            'firstname' => '',
            'lastname' => '',
            'gender' => '',
            'city' => '',
            'mobile' => '',
        ]);
        DB::table('profiles')->insert([
            'user_id' => 2,
            'firstname' => '',
            'lastname' => '',
            'gender' => '',
            'city' => '',
            'mobile' => '',
        ]);
        DB::table('profiles')->insert([
            'user_id' => 3,
            'firstname' => '',
            'lastname' => '',
            'gender' => '',
            'city' => '',
            'mobile' => '',
        ]);
        DB::table('profiles')->insert([
            'user_id' => 4,
            'firstname' => '',
            'lastname' => '',
            'gender' => '',
            'city' => '',
            'mobile' => '',
        ]);
    }
}
