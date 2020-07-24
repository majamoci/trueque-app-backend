<?php

use Illuminate\Database\Seeder;

class PubTransactionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pubs_transaction')->insert([
            'id' => 1,
            'state' => 'draft',
            'user_id' => 4,
            'pub_id' => 1
        ]);
        DB::table('pubs_transaction')->insert([
            'id' => 2,
            'state' => 'published',
            'user_id' => 4,
            'pub_id' => 2
        ]);
    }
}
