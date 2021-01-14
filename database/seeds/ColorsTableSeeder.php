<?php

use Illuminate\Database\Seeder;

class ColorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('colors')->insert([
            'color' => '琥珀色'
        ]);
        
        DB::table('colors')->insert([
            'color' => '赤褐色'
        ]);
        
        DB::table('colors')->insert([
            'color' => '黄金色'
        ]);
        
        DB::table('colors')->insert([
            'color' => 'その他'
        ]);
        //
    }
}
