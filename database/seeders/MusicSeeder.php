<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class MusicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('music')->insert([
                'name' => 'Shape of You',
                'artist' => 'Ed Sheeran',
                'average' => 4.5,
                'video_id' => 'JGwWNGJdvx8',
        ]);
        
        DB::table('music')->insert([
                'name' => 'Waiting for Love',
                'artist' => 'Avicii',
                'average' => 4.7,
                'video_id' => 'cHHLHGNpCSA',
        ]);
    }
}
