<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('categories')->truncate();
        \Illuminate\Support\Facades\DB::table('categories')->insert([
            [
                'name'=>'Cellphone',
                'description'=>'Apple Samsung Sony Google'
            ],

            [
                'name'=>'Laptop',
                'description'=>'Apple Microsoft Dell Thinkpad'
            ],

            [
                'name'=>'Accessories',
                'description'=>'Phone Case'
            ],

            [
                'name'=>'Smart Home Devices',
                'description'=>'Amazon Microsoft'
            ],

            [
                'name'=>'Tablet',
                'description'=>'Apple iPad'
            ],
        ]);
    }
}
