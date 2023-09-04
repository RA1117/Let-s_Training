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
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        
        DB::table('trainings')->insert([
                'training_name' => 'ディップス',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        
        DB::table('trainings')->insert([
                'training_name' => 'ベンチプレス',
                'training_weight' => '62.5',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        
        DB::table('trainings')->insert([
                'training_name' => 'デッドリフト',
                'training_weight' => '62.5',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        
    }
}
