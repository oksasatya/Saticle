<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // faker by indonesia
        $faker = \Faker\Factory::create('id_ID');
        $title = $this->faker->sentence;
        $slug = Str::slug($title);
        $tag = ['tag1', 'tag2', 'tag3'][$this->faker->numberBetween(0, 2)];
        // faker ramdom image and save to public/storage/img/post
        $image = $this->faker->image('public/storage/img/post', 640, 480, null, false);
        $image = str_replace('public/storage/img/', '', $image);
        $image = str_replace('public/', '', $image);



        return [
            'title' => $title,
            'slug' => $slug,
            // text 150 characters
            'content' => $this->faker->sentence(250),
            'published' => $this->faker->boolean,
            'tag' => $tag,
            // image
            'image' => $image,
            'author' => $faker->name,
        ];
    }
}
