<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\GameLog;

class GameLogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        GameLog::create([
            'game_title' => 'The Legend of Zelda: Breath of the Wild',
            'platform' => 'Nintendo Switch',
            'status' => 'Completed',
            'last_played' => '2025-10-01',
        ]);
        GameLog::create([
            'game_title' => 'The Witcher 3: Wild Hunt',
            'platform' => 'PC',
            'status' => 'On Progress',
            'last_played' => '2025-10-05',
        ]);
        GameLog::create([
            'game_title' => 'Dark Souls III',
            'platform' => 'PlayStation 5',
            'status' => 'Completed',
            'last_played' => '2025-09-15',
        ]);
        GameLog::create([
            'game_title' => 'Hollow Knight',
            'platform' => 'PlayStation 4',
            'status' => 'On Progress',
            'last_played' => '2025-10-10',
        ]);
        GameLog::create([
            'game_title' => 'Final Fantasy VII Remake',
            'platform' => 'PC',
            'status' => 'Completed',
            'last_played' => '2025-09-20',
        ]);
        
    }
}
