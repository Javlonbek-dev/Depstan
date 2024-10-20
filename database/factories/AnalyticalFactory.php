<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Analytical;

class AnalyticalFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Analytical::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(4),
            'published_at' => $this->faker->date(),
            'image' => '{}',
            'text' => $this->faker->text(),
            'editor'=>$this->faker->name(),
        ];
    }
}
