<?php

use Illuminate\Database\Seeder;

class ItemsTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            'title'=>str_random(10),
            'description'=>str_random(200),
        ]);

    }
}
