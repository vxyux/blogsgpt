<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Blog;
use App\Models\User;
use App\Models\Tag;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->times(10)->create();
        Blog::factory()->times(20)->create();
        Tag::factory()->times(4)->create();

        for($i = 0; $i < 20; $i++) {
            \App\Models\BlogTag::factory()->create([
                'blog_id' => Blog::all()->random()->id,
                'tag_id' => Tag::all()->random()->id
            ]);
        }
    }
}
