<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class RecordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('records')->insert([
                'user_id' => 1,
                'date' => now(),
                'training_name' => 'ベンチプレス',
                'training_weight' => '62.5',
                'time' => '3',
                'set' => '3',
                'part_name' => '大胸筋',
                'weight' => '62.5',
                'run_time' => 11230,
                'run_distance' => '3',
                'diet' => '350',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        
        DB::table('records')->insert([
                'user_id' => 1,
                'date' => 20230823,
                'training_name' => 'スクワット',
                //'training_weight' => '62.5',
                'time' => '3',
                'set' => '3',
                'part_name' => '大腿四頭筋',
                'weight' => '62.5',
                //'run_time' => 11230,
                //'run_distance' => '3',
                //'diet' => '350',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        
        DB::table('records')->insert([
                'training_name' => '腹筋',
        ]);
    }
}
