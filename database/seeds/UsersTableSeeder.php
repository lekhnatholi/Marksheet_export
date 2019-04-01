<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['name'=>'admin','email'=>'admin@gmail.com','password'=>bcrypt('admin'),'user_type'=>'admin'],
            ['name'=>'teacher','email'=>'teacher@gmail.com','password'=>bcrypt('teacher'),'user_type'=>'teacher']
    ]);

    }
}
