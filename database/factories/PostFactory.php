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
        $title = $faker->sentence();
        $slug = Str::slug($title);
        // generate random image save to public
        $image = $this->faker->image('public/storage/', 640, 480, null, false);
        return [
            'title' => $title,
            'slug' => $slug,
            // text 150 characters
            'content' => $this->faker->sentence(250),
            'status' => $this->faker->boolean,
            // image
            'image' => $image,
            'author' => $faker->name,
        ];
    }
}
