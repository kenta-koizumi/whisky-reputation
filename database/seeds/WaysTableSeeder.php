<?php

use Illuminate\Database\Seeder;

class WaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ways')->insert([
            'way' => 'ストレート'
        ]);
        
        DB::table('ways')->insert([
            'way' => 'ロック'
        ]);
        
        DB::table('ways')->insert([
            'way' => '水割り'
        ]);
        
        DB::table('ways')->insert([
            'way' => 'お湯割り'
        ]);
        
        DB::table('ways')->insert([
            'way' => 'ハイボール'
        ]);
        //
    }
}
