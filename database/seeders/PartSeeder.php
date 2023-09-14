<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class PartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('parts')->insert([
                'body_id' => 1,
                'part_name' => '大胸筋上部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        
        DB::table('parts')->insert([
                'body_id' => 1,
                'part_name' => '大胸筋中部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        
        DB::table('parts')->insert([
                'body_id' => 1,
                'part_name' => '大胸筋下部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        
        DB::table('parts')->insert([
                'body_id' => 1,
                'part_name' => '大胸筋全体',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        
        DB::table('parts')->insert([
                'body_id' => 4,
                'part_name' => '広背筋',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        
        DB::table('parts')->insert([
                'body_id' => 4,
                'part_name' => '僧帽筋',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        
        DB::table('parts')->insert([
                'body_id' => 3,
                'part_name' => '三角筋前部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        
        DB::table('parts')->insert([
                'body_id' => 3,
                'part_name' => '三角筋中部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        
        DB::table('parts')->insert([
                'body_id' => 3,
                'part_name' => '三角筋後部',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        
        DB::table('parts')->insert([
                'body_id' => 2,
                'part_name' => '上腕二頭筋',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        
        DB::table('parts')->insert([
                'body_id' => 2,
                'part_name' => '上腕三頭筋',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        
        DB::table('parts')->insert([
                'body_id' => 2,
                'part_name' => '前腕筋',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        
        DB::table('parts')->insert([
                'body_id' => 5,
                'part_name' => '腹直筋',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        
        DB::table('parts')->insert([
                'body_id' => 5,
                'part_name' => '腹斜筋',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        
        DB::table('parts')->insert([
                'body_id' => 6,
                'part_name' => '大臀筋',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        
        DB::table('parts')->insert([
                'body_id' => 6,
                'part_name' => '大腿四頭筋',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        
        DB::table('parts')->insert([
                'body_id' => 6,
                'part_name' => '大腿二頭筋',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        
        DB::table('parts')->insert([
                'body_id' => 6,
                'part_name' => '下腿三頭筋筋',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        
    }
}
