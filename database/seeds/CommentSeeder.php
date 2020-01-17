<?php

use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
           ['user_id'=>1,'post_id'=>1, 'content'=>"Comment Post1"],
            ['user_id'=>1,'post_id'=>2, 'content'=>"Comment Post2"],
            ['user_id'=>1,'post)id'=>3, 'content'=>"Comment Post3"],
           
       ]);
    }
}
