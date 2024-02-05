<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [
            [
                'name' => 'action',
            ],
            [
                'name' => 'war-game',
            ],
            [
                'name' => 'prop',
            ],
            [
                'name' => 'cars',
            ],
            [
                'name' => 'fantasy',
            ],
            [
                'name' => 'single-player',
            ], [
                'name' => 'war-game',
            ],
            [
                'name' => 'science',
            ],
            [
                'name' => 'open-air',
            ],
            [
                'name' => 'Horror',
            ],
            [
                'name' => 'multi-player',
            ],
        ];

        foreach ($tags as $tag) {
            $newTag = new Tag();
            $newTag->fill($tag);
            $newTag->save();
        }
    }
}
