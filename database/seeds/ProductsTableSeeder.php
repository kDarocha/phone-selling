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
            'name' => 'Iphone 6',
            'description' => 'Trop cool',
            'amount' => 680,
            'image' => null,
            'brand_id' => 1,
        ]);
        DB::table('products')->insert([
            'name' => 'Galaxy S8',
            'description' => 'Trop ouf',
            'amount' => 800,
            'image' => null,
            'brand_id' => 2,
        ]);
        DB::table('products')->insert([
            'name' => 'G6',
            'description' => 'Trop belle photo',
            'amount' => 400,
            'image' => null,
            'brand_id' => 3,
        ]);
    }
}
