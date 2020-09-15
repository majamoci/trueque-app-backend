<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(ProfilesTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(PublicationsTableSeeder::class);
        $this->call(MarkettypesTableSeeder::class);
        $this->call(UnitMeasureTableSeeder::class);
        $this->call(RegisterCategoryTableSeeder::class);
        $this->call(RegisterMarketSectorTableSeeder::class);
        $this->call(RegisterSystemProductTableSeeder::class);
        $this->call(RegisterMarketTableSeeder::class);
        $this->call(RegisterPriceTableSeeder::class);
    }
}
