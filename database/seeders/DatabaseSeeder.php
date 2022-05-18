<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $tag = Tag::factory(10)->create();
        $this->call([
            PermissionsSeeder::class,
        ]);
        $user = User::factory(30)->create();
        $user->each(function ($user) {
            $user->assignRole('user');
        });

        Post::factory(30)->create()->each(function ($post) use ($tag) {
            // create a random number of tags with timestamp
            $post->tags()->attach($tag->random(rand(1, 5))->pluck('id'));
        });
    }
}
