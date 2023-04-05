<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DrinkCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('drink_category')->insert(['name' => 'Kopi', 'created_at' => date('Y-m-d H:i:s'), "updated_at" => date('Y-m-d H:i:s')]);
        DB::table('drink_category')->insert(['name' => 'Non-kopi', 'created_at' => date('Y-m-d H:i:s'), "updated_at" => date('Y-m-d H:i:s')]);
    }
}
