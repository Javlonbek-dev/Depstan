<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\ArticleUser;
use App\Models\Comment;

class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comment::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'article_id' => $this->faker->word(),
            'user_id' => $this->faker->word(),
            'content' => $this->faker->paragraphs(3, true),
            'status' => $this->faker->word(),
            'article_user_id' => ArticleUser::factory(),
        ];
    }
}
