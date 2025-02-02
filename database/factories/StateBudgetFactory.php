<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\StateBudget;

class StateBudgetFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = StateBudget::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'file' => $this->faker->word(),
        ];
    }
}
