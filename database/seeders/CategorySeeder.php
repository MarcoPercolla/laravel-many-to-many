<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'videogiochi',
                'description' => 'avventure da vivere sulle tue console preferite(ps/xbox/nintendo)',
            ],
            [
                'name' => 'Giochi da tavola',
                'description' => 'vecchi classici sempre di moda',
            ],
            [
                'name' => "Giochi all'aperto",
                'description' => 'palle, freesby, corde ecc.',
            ],
            [
                'name' => 'collezionabili',
                'description' => 'statuette, memorabilia, costumi ecc',
            ],
            [
                'name' => "giochi d'ingegno",
                'description' => 'scacchi, puzzles, trivia ecc.',
            ],
        ];

        foreach ($categories as $category) {
            $newCategory = new Category();
            $newCategory->fill($category);
            $newCategory->save();
        }
    }
}
