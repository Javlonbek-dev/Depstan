<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Vacancy;

class VacancyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Vacancy::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'organ' => $this->faker->word(),
            'published_at' => $this->faker->date(),
            'branch' => $this->faker->word(),
            'salary' => $this->faker->word(),
            'specialty' => $this->faker->word(),
            'experience' => $this->faker->word(),
            'employment' => $this->faker->word(),
            'information' => $this->faker->word(),
            'gender' => $this->faker->word(),
        ];
    }
}
