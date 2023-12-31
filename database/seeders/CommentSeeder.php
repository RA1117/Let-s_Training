<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;


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
                'body' => 'テンポが最高',
                'review' => 4.8,
                'good' => 1,
                'music_id' => 1,
                'user_id' => 2,
        ]);
        
        DB::table('comments')->insert([
                'body' => 'リズムが最高',
                'review' => 4.6,
                'good' => 1,
                'music_id' => 1,
                'user_id' => 3,
        ]);
        
        DB::table('comments')->insert([
                'body' => '聞いていて楽しい',
                'review' => 4.8,
                'good' => 1,
                'music_id' => 2,
                'user_id' => 3,
        ]);
    }
}
