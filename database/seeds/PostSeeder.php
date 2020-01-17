<?php

use Illuminate\Database\Seeder;
use  Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('posts')->insert([
           ['user_id'=>1,'title'=>"Post One", 'content'=>"Conternt Post1"],
            ['user_id'=>1,'title'=>"Post two", 'content'=>"Conternt Post2"],
            ['user_id'=>1,'title'=>"Post three", 'content'=>"Conternt Post3"],
           
       ]);
    }
}
