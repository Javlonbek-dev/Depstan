<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Leadership;

class LeadershipFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Leadership::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'position' => $this->faker->word(),
            'full_name' => $this->faker->word(),
            'phone' => $this->faker->phoneNumber(),
            'birth_date' => $this->faker->word(),
            'info' => $this->faker->word(),
            'work_activity' => '{}',
            'family_info' => $this->faker->word(),
            'reception_days' => $this->faker->word(),
        ];
    }
}
