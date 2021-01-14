<?php

use Illuminate\Database\Seeder;

class TasteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tastes')->insert([
            'taste' => 'リッチ'
        ]);
        DB::table('tastes')->insert([
            'taste' => 'マイルド'
        ]);
        DB::table('tastes')->insert([
            'taste' => '甘味'
        ]);
        DB::table('tastes')->insert([
            'taste' => '酸味'
        ]);
        DB::table('tastes')->insert([
            'taste' => '苦味'
        ]);
        DB::table('tastes')->insert([
            'taste' => '塩味'
        ]);
        DB::table('tastes')->insert([
            'taste' => 'その他'
        ]);
        //
    }
}
