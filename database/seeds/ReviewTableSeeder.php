<?php

use Illuminate\Database\Seeder;

class ReviewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('review')->insert([
            'shop_id' => '1',
            'title' => 'アイテムが充実しています',
            'body' => '新商品が多くて満足しています',
            'user_name' => 'ひよこさん',
            'time' => '2020-08-07 09:00:00'
        ]);

        DB::table('review')->insert([
            'shop_id' => '1',
            'title' => 'お気に入りのお店です',
            'body' => '新商品が多くて満足しています',
            'user_name' => 'いぬさん',
            'time' => '2020-08-10 10:00:00'
        ]);

        DB::table('review')->insert([
            'shop_id' => '2',
            'title' => '可愛い洋服が売っています',
            'body' => '姉妹が経営していて居心地が良いです',
            'user_name' => 'ねこさん',
            'time' => '2020-08-08 10:00:00'
        ]);

        DB::table('review')->insert([
            'shop_id' => '2',
            'title' => 'とても安いです',
            'body' => 'お気に入りの絨毯を購入できて満足です',
            'user_name' => 'ぶたさん',
            'time' => '2020-08-22 14:00:00'
        ]);

        DB::table('review')->insert([
            'shop_id' => '3',
            'title' => '飽きない',
            'body' => '色んなものが展示されていていつも楽しいです',
            'user_name' => 'くまさん',
            'time' => '2020-08-09 11:00:00'
        ]);

        DB::table('review')->insert([
            'shop_id' => '3',
            'title' => '毎週通ってしまいます',
            'body' => '息子と一緒に、休みになると遊びに行きます',
            'user_name' => 'うさぎさん',
            'time' => '2020-08-15 18:00:00'
        ]);
    }
}
