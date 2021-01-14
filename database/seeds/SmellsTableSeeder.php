<?php

use Illuminate\Database\Seeder;

class SmellsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('smells')->insert([
            'smell' => 'ピーティー'
        ]);
        DB::table('smells')->insert([
            'smell' => 'ヨード'
        ]);
        DB::table('smells')->insert([
            'smell' => 'スモーキー'
        ]);
        DB::table('smells')->insert([
            'smell' => 'フルーティー'
        ]);
        DB::table('smells')->insert([
            'smell' => 'モルティ―'
        ]);
        DB::table('smells')->insert([
            'smell' => 'ウッディー'
        ]);
        DB::table('smells')->insert([
            'smell' => 'ナッティー'
        ]);
        DB::table('smells')->insert([
            'smell' => 'トーフィー'
        ]);
        DB::table('smells')->insert([
            'smell' => 'その他'
        ]);
        //
    }
}
