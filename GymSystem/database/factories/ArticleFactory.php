<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->title,
            'created_at' => $this->faker->dateTimeThisMonth(),
            'updated_at' => $this->faker->dateTimeThisMonth(),
            'short_description' => $this->faker->text(150),
            'content' => $this->faker->paragraph(20),
            'SEO_title' => $this->faker->title(),
            'SEO_description' => $this->faker->text(150),
            'slug' => $this->faker->unique()->name(),
            'category_id' => rand(1,10),
            'author_id'=>rand(1,10),
            'image_id' => rand(1,10)
        ];
    }
}
