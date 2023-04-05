<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class FoodCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('food_category')->insert(['name' => 'Indomie', 'created_at' => date('Y-m-d H:i:s'), "updated_at" => date('Y-m-d H:i:s')]);
        DB::table('food_category')->insert(['name' => 'Roti Panggang', 'created_at' => date('Y-m-d H:i:s'), "updated_at" => date('Y-m-d H:i:s')]);
        DB::table('food_category')->insert(['name' => 'Mie Ayam', 'created_at' => date('Y-m-d H:i:s'), "updated_at" => date('Y-m-d H:i:s')]);
    }
}
