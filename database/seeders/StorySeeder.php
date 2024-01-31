<?php

namespace Database\Seeders;

use App\Models\Story;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $stories = [
            [
                'story_path' => '1'
            ],
            [
                'story_path' => '1BAD'
            ],
            [
                'story_path' => '1GOOD'
            ],
            [
                'story_path' => '2A'
            ],
            [
                'story_path' => '2ABAD'
            ],
            [
                'story_path' => '2AGOOD'
            ],
            [
                'story_path' => '2B'
            ],
            [
                'story_path' => '2BBAD'
            ],
            [
                'story_path' => '2BGOOD'
            ],
            [
                'story_path' => '3A'
            ],
            [
                'story_path' => '3ABAD'
            ],
            [
                'story_path' => '3AGOOD'
            ],
            [
                'story_path' => '3B'
            ],
            [
                'story_path' => '3BBAD'
            ],
            [
                'story_path' => '3BGOOD'
            ],
            [
                'story_path' => '3BMID'
            ],
            [
                'story_path' => '4A'
            ],
            [
                'story_path' => '4ABAD'
            ],
            [
                'story_path' => '4AGOOD'
            ],
            [
                'story_path' => '4B'
            ],
            [
                'story_path' => '4BBAD'
            ],
            [
                'story_path' => '4BGOOD'
            ],
            [
                'story_path' => '5'
            ],
            [
                'story_path' => 'BAD'
            ],
            [
                'story_path' => 'GOOD'
            ],
            [
                'story_path' => 'MEDIUM'
            ],
        ];

        foreach ($stories as $story) {
            Story::create($story);
        }
    }
}
