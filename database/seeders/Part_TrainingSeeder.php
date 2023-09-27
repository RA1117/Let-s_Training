<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class Part_TrainingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('part_training')->insert([
                'part_id' => '2',
                'training_id' => '2',
        ]);
        
        DB::table('part_training')->insert([
                'part_id' => '10',
                'training_id' => '2',
        ]);
        
        DB::table('part_training')->insert([
                'part_id' => '11',
                'training_id' => '2',
        ]);
        
        DB::table('part_training')->insert([
                'part_id' => '2',
                'training_id' => '4',
        ]);
        
        DB::table('part_training')->insert([
                'part_id' => '5',
                'training_id' => '6',
        ]);
        
        DB::table('part_training')->insert([
                'part_id' => '8',
                'training_id' => '7',
        ]);
        
        DB::table('part_training')->insert([
                'part_id' => '4',
                'training_id' => '8',
        ]);
        
        DB::table('part_training')->insert([
                'part_id' => '16',
                'training_id' => '9',
        ]);
        
        DB::table('part_training')->insert([
                'part_id' => '16',
                'training_id' => '10',
        ]);
    }
}
