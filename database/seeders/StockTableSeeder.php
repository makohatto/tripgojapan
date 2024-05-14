<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StockTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('stocks')->truncate();
            $stocks = 
            [
                [    
                'travel_destination' => '信州/成田経由',
                'explain' => '上高地、北アルプス、南アルプス、中央アルプス',
                'rate' => 70000,
                'imagePath' => 'kamikochi.jpg',
                ],
                [
                'travel_destination' => '北海道',
                'explain' => '稚内、美瑛、屈斜路湖、摩周湖、知床',
                'rate' => 100000,
                'imagePath' => 'bihoro.jpg',
                ],
                [
                'travel_destination' => '信州/関西経由',
                'explain' => '上高地、北アルプス、南アルプス、中央アルプス',
                'rate' => 70000,
                'imagePath' => 'kamikochi.jpg',
                ],
                [
                'travel_destination' => '信州/中部経由',
                'explain' => '上高地、北アルプス、南アルプス、中央アルプス',
                'rate' => 70000,
                'imagePath' => 'kamikochi.jpg',
                ],
                [
                'travel_destination' => '沖縄/福岡経由',
                'explain' => '沖縄、石垣島、波照間島',
                'rate' => 100000,
                'imagePath' => 'hateruma.jpg',
                ],
                [
                'travel_destination' => '沖縄/関西経由',
                'explain' => '沖縄、石垣島、波照間島',
                'rate' => 100000,
                'imagePath' => 'hateruma.jpg',
                ],
                [
                'travel_destination' => '沖縄/成田経由',
                'explain' => '沖縄、石垣島、波照間島',
                'rate' => 100000,
                'imagePath' => 'hateruma.jpg',
                ],
                [
                'travel_destination' => '九州/成田経由',
                'explain' => 'くじゅう連山、霧島、祖母傾',
                'rate' => 70000,
                'imagePath' => 'kuju.jpg',
                ],
                [
                'travel_destination' => '九州/関西経由',
                'explain' => 'くじゅう連山、霧島、祖母傾',
                'rate' => 70000,
                'imagePath' => 'kuju.jpg',
                ],
            ];
    
        DB::table('stocks')->insert($stocks);

    }
}