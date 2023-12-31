<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class Comment_UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comment_user')->insert([
                'comment_id' => '2',
                'user_id' => '2',
        ]);
        
        DB::table('comment_user')->insert([
                'comment_id' => '1',
                'user_id' => '3',
        ]);
        
        DB::table('comment_user')->insert([
                'comment_id' => '3',
                'user_id' => '3',
        ]);
    }
}
