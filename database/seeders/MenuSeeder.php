<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Makanan
        DB::table('menu')->insert(['name' => 'Indomie Goreng/Rebus B Aja', 'price' => 10000, 'pic_file' => 'indomie-1.jfif', 'food_category_id' => 1, 'drink_category_id' => NULL, 'created_at' => date('Y-m-d H:i:s'), "updated_at" => date('Y-m-d H:i:s')]);

        DB::table('menu')->insert(['name' => 'Indomie Goreng/Rebus Bakso 2', 'price' => 15000, 'pic_file' => 'indomie-2.jfif', 'food_category_id' => 1, 'drink_category_id' => NULL, 'created_at' => date('Y-m-d H:i:s'), "updated_at" => date('Y-m-d H:i:s')]);

        DB::table('menu')->insert(['name' => 'Indomie Goreng/Rebus Spesial', 'price' => 17000, 'pic_file' => 'indomie-3.jfif', 'food_category_id' => 1, 'drink_category_id' => NULL, 'created_at' => date('Y-m-d H:i:s'), "updated_at" => date('Y-m-d H:i:s')]);

        DB::table('menu')->insert(['name' => 'Indomie Goreng/Rebus Kornet Sapi', 'price' => 17000, 'pic_file' => 'indomie-4.jfif', 'food_category_id' => 1, 'drink_category_id' => NULL, 'created_at' => date('Y-m-d H:i:s'), "updated_at" => date('Y-m-d H:i:s')]);

        DB::table('menu')->insert(['name' => 'Roti Panggang 1 Rasa', 'price' => 10000, 'pic_file' => 'ropang-1.jpg', 'food_category_id' => 2, 'drink_category_id' => NULL, 'created_at' => date('Y-m-d H:i:s'), "updated_at" => date('Y-m-d H:i:s')]);

        DB::table('menu')->insert(['name' => 'Roti Panggang 2 Rasa', 'price' => 12000, 'pic_file' => 'ropang-2.jpg', 'food_category_id' => 2, 'drink_category_id' => NULL, 'created_at' => date('Y-m-d H:i:s'), "updated_at" => date('Y-m-d H:i:s')]);

        DB::table('menu')->insert(['name' => 'Roti Panggang 3 Rasa', 'price' => 14000, 'pic_file' => 'ropang-3.jpg', 'food_category_id' => 2, 'drink_category_id' => NULL, 'created_at' => date('Y-m-d H:i:s'), "updated_at" => date('Y-m-d H:i:s')]);

        DB::table('menu')->insert(['name' => 'Roti Panggang Gila Bener', 'price' => 18000, 'pic_file' => 'ropang-4.jpg', 'food_category_id' => 2, 'drink_category_id' => NULL, 'created_at' => date('Y-m-d H:i:s'), "updated_at" => date('Y-m-d H:i:s')]);

        DB::table('menu')->insert(['name' => 'Mie Ayam Aja', 'price' => 14000, 'pic_file' => 'mie_ayam-1.jfif', 'food_category_id' => 3, 'drink_category_id' => NULL, 'created_at' => date('Y-m-d H:i:s'), "updated_at" => date('Y-m-d H:i:s')]);

        DB::table('menu')->insert(['name' => 'Mie Ayam Bakso 2', 'price' => 16000, 'pic_file' => 'mie_ayam-2.jfif', 'food_category_id' => 3, 'drink_category_id' => NULL, 'created_at' => date('Y-m-d H:i:s'), "updated_at" => date('Y-m-d H:i:s')]);
    
        DB::table('menu')->insert(['name' => 'Mie Ayam Bakso 2 + Pangsit 2', 'price' => 20000, 'pic_file' => 'mie_ayam-3.jfif', 'food_category_id' => 3, 'drink_category_id' => NULL, 'created_at' => date('Y-m-d H:i:s'), "updated_at" => date('Y-m-d H:i:s')]);

        // Minuman

        DB::table('menu')->insert(['name' => 'Kopi Moccacino Dingin/Panas', 'price' => 20000, 'pic_file' => 'kopi-1.jpg', 'food_category_id' => NULL, 'drink_category_id' => 1, 'created_at' => date('Y-m-d H:i:s'), "updated_at" => date('Y-m-d H:i:s')]);

        DB::table('menu')->insert(['name' => 'Kopi Americano Dingin/Panas', 'price' => 20000, 'pic_file' => 'kopi-2.jfif', 'food_category_id' => NULL, 'drink_category_id' => 1, 'created_at' => date('Y-m-d H:i:s'), "updated_at" => date('Y-m-d H:i:s')]);

        DB::table('menu')->insert(['name' => 'Kopi Cold Brew', 'price' => 20000, 'pic_file' => 'kopi-3.jfif', 'food_category_id' => NULL, 'drink_category_id' => 1, 'created_at' => date('Y-m-d H:i:s'), "updated_at" => date('Y-m-d H:i:s')]);

        DB::table('menu')->insert(['name' => 'Air Minum Dingin/B aja', 'price' => 10000, 'pic_file' => 'non_kopi-1.jpg', 'food_category_id' => NULL, 'drink_category_id' => 2, 'created_at' => date('Y-m-d H:i:s'), "updated_at" => date('Y-m-d H:i:s')]);

        DB::table('menu')->insert(['name' => 'Susu Soda Gembira', 'price' => 10000, 'pic_file' => 'non_kopi-2.jfif', 'food_category_id' => NULL, 'drink_category_id' => 2, 'created_at' => date('Y-m-d H:i:s'), "updated_at" => date('Y-m-d H:i:s')]);

        DB::table('menu')->insert(['name' => 'Fanta/Cola/Sprite', 'price' => 10000, 'pic_file' => 'non_kopi-3.jpg', 'food_category_id' => NULL, 'drink_category_id' => 2, 'created_at' => date('Y-m-d H:i:s'), "updated_at" => date('Y-m-d H:i:s')]);

        DB::table('menu')->insert(['name' => 'Dancow Dingin/Panas', 'price' => 10000, 'pic_file' => 'non_kopi-4.jpg', 'food_category_id' => NULL, 'drink_category_id' => 2, 'created_at' => date('Y-m-d H:i:s'), "updated_at" => date('Y-m-d H:i:s')]);
    }
}
