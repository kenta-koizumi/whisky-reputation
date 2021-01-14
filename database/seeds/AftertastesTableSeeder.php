<?php

use Illuminate\Database\Seeder;

class AftertastesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('aftertastes')->insert([
            'aftertaste' => '長い'
        ]);
        DB::table('aftertastes')->insert([
            'aftertaste' => 'やや長い'
        ]);
        DB::table('aftertastes')->insert([
            'aftertaste' => '中程度'
        ]);
        DB::table('aftertastes')->insert([
            'aftertaste' => 'やや短い'
        ]);
        DB::table('aftertastes')->insert([
            'aftertaste' => '短い'
        ]);
        //
    }
}
