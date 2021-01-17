<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call([AftertastesTableSeeder::class]);
        $this->call([ColorsTableSeeder::class]);
        $this->call([SmellsTableSeeder::class]);
        $this->call([TasteTableSeeder::class]);
        $this->call([WaysTableSeeder::class]);
        $this->call([WhisiesTableSeeder::class]);
    }
}
