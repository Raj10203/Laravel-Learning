<?php

namespace Database\Factories;

use App\Models\Category;
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
    public function definition(): array
    {
        $title = $this->faker->sentence;
        return [
            "title"=> $title,
            "content"=> $this->faker->text,
            "image"=> $this->faker->imageUrl,
            "category_id"=> Category::inRandomOrder()->first()->id,
            "user_id" => 1,
            "slug"=> Str::slug($title),
            "published_at"=> $this->faker->dateTimeBetween('-1 month', 'now'),
        ];
    }
}
