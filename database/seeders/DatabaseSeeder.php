<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Tag;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $user = User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'password',
            'api_token' => '$2y$10$VlSBeSpxCVGqasmGndkGnOkj075sX3gQSxsbbHmWlUVrdJxd9avnW'
        ]);


        // Create 10 posts
        for ($i = 0; $i < 10; $i++) {
            $post = Post::factory()->create([
                'user_id' => $user->id,]);

            // Add 3 random tags to each post
            $tags = Tag::factory(3)->create();
            $post->tags()->attach($tags);
            $post->save();
        }
    }
}
