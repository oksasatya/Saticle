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
        $title = $this->faker->sentence;
        $slug = Str::slug($title);
        $tag = ['tag1', 'tag2', 'tag3'][$this->faker->numberBetween(0, 2)];
        return [
            'title' => $title,
            'slug' => $slug,
            // text 150 characters
            'content' => $this->faker->text(150),
            'published' => $this->faker->boolean,
            'tag' => $tag,
        ];
    }
}
