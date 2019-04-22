<?php

use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
            'name' => 'Apple',
        ]);
        DB::table('brands')->insert([
            'name' => 'Samsung',
        ]);
        DB::table('brands')->insert([
            'name' => 'LG',
        ]);
    }
}
