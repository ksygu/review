<?php

use Illuminate\Database\Seeder;

class ShopTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shop')->insert([
            'name' => 'たぬき商店',
            'address' => '東京都新宿区西新宿7-5-25 西新宿プライムスクエア8F',
            'phone_number' => '0312345678'
        ]);

        DB::table('shop')->insert([
            'name' => 'エイブルシスターズ',
            'address' => '東京都新宿区西新宿7-5-25 西新宿プライムスクエアB2F',
            'phone_number' => '0112223333'
        ]);

        DB::table('shop')->insert([
            'name' => '博物館',
            'address' => '東京都新宿区西新宿7-5-25 西新宿プライムスクエア',
            'phone_number' => '08022339999'
        ]);


    }
}
