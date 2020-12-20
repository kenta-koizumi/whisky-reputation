<?php

use Illuminate\Database\Seeder;

class WhiskiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('whiskies')->insert([
            'whisky_name' => 'サントリーウイスキー白州',
            'maker' => 'サントリー',
            'percentage' => '43',
            'whisky_image' => '#'
        ]);
        DB::table('whiskies')->insert([
            'whisky_name' => 'サントリーウイスキー響',
            'maker' => 'サントリー',
            'percentage' => '43',
            'whisky_image' => '#'
        ]);
        DB::table('whiskies')->insert([
            'whisky_name' => 'サントリーウイスキーローヤル',
            'maker' => 'サントリー',
            'percentage' => '43',
            'whisky_image' => '#'
        ]);
        DB::table('whiskies')->insert([
            'whisky_name' => 'サントリーウイスキースペシャルリザーブ',
            'maker' => 'サントリー',
            'percentage' => '40',
            'whisky_image' => '#'
        ]);
        DB::table('whiskies')->insert([
            'whisky_name' => 'サントリーウイスキーオールド',
            'maker' => 'サントリー',
            'percentage' => '43',
            'whisky_image' => '#'
        ]);
        DB::table('whiskies')->insert([
            'whisky_name' => 'サントリーウイスキー角瓶',
            'maker' => 'サントリー',
            'percentage' => '40',
            'whisky_image' => '#'
        ]);
        DB::table('whiskies')->insert([
            'whisky_name' => 'サントリーウイスキーホワイト',
            'maker' => 'サントリー',
            'percentage' => '40',
            'whisky_image' => '#'
        ]);
        DB::table('whiskies')->insert([
            'whisky_name' => 'サントリーウイスキートリス',
            'maker' => 'サントリー',
            'percentage' => '37',
            'whisky_image' => '#'
        ]);
        DB::table('whiskies')->insert([
            'whisky_name' => 'サントリーウイスキーレッド',
            'maker' => 'サントリー',
            'percentage' => '39',
            'whisky_image' => '#'
        ]);
        DB::table('whiskies')->insert([
            'whisky_name' => 'サントリーウイスキー知多',
            'maker' => 'サントリー',
            'percentage' => '40',
            'whisky_image' => '#'
        ]);
        //
    }
}
