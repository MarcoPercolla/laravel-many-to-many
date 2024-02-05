<?php

namespace Database\Seeders;

use App\Models\Game;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $games = [
            [
                'title' => 'Fortnite',
                'description' => 'descrizione lunga',
                'thumb' => 'ulr img',
                'category_id' => 1,
            ],
            [
                'title' => 'Call Of Duty Modern Warfare',
                'description' => 'descrizione lunga 2',
                'thumb' => 'ulr img 2',
                'category_id' => 1,
            ],
            [
                'title' => 'Lego',
                'description' => 'descrizione lunga3',
                'thumb' => 'ulr img',
                'category_id' => 4,
            ],
            [
                'title' => 'Monopoli',
                'description' => 'descrizione lunga 4',
                'thumb' => 'ulr img 2',
                'category_id' => 2,
            ],
            [
                'title' => 'trivial',
                'description' => 'descrizione lunga 5',
                'thumb' => 'ulr img',
                'category_id' => 5,
            ],
            [
                'title' => 'Nerf',
                'description' => 'descrizione lunga 6',
                'thumb' => 'ulr img 2',
                'category_id' => 3,
            ],
            [
                'title' => 'zelda',
                'description' => 'descrizione lunga 7',
                'thumb' => 'ulr img',
                'category_id' => 1,
            ],
            [
                'title' => 'magic',
                'description' => 'descrizione lunga 8',
                'thumb' => 'ulr img 2',
                'category_id' => 2,
            ],
        ];
        foreach ($games as $game) {

            $new_game = new Game();
            // $new_game->title = $game['title'];
            // $new_game->description = $game['description'];
            // $new_game->thumb =  $game['thumb'];
            // $new_game->category_id =  $game['category_id'];
            $new_game->fill($game);
            $new_game->save();
        }
    }
}
