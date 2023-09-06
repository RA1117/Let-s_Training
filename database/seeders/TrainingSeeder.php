<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class TrainingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trainings')->insert([
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        
        DB::table('trainings')->insert([
                'training_name' => '腕立て伏せ',
                'video_id' => 'NS4Rta4mFWQ',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        
        DB::table('trainings')->insert([
                'training_name' => 'ディップス',
                'video_id' => '4NtPyLcvigw',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        
        DB::table('trainings')->insert([
                'training_name' => 'ベンチプレス',
                'training_weight' => '62.5',
                'video_id' => 'U36yx36klhQ',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        
        DB::table('trainings')->insert([
                'training_name' => 'デッドリフト',
                'training_weight' => '62.5',
                'video_id' => 'ny5Hr7yvoqQ',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        
    }
}
