<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Article;
use App\Models\AuthorCategory;

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
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(4),
            'content' => $this->faker->paragraphs(3, true),
            'author_id' => $this->faker->word(),
            'category_id' => $this->faker->word(),
            'status' => $this->faker->word(),
            'featured_image' => $this->faker->word(),
            'published_at' => $this->faker->dateTime(),
            'deleted_at' => $this->faker->word(),
            'author_category_id' => AuthorCategory::factory(),
        ];
    }
}
