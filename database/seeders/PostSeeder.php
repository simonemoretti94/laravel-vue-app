<?php

namespace Database\Seeders;

use App\Models\Post as AdminPost;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = config('posts.posts');

        foreach ($posts as $post) {
            $newpost = new AdminPost();
            $newpost->title = $post['title'];
            $newpost->description = $post['description'];
            $newpost->save();
        }
    }
}
