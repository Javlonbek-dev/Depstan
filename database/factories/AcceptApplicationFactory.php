<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\AcceptApplication;

class AcceptApplicationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AcceptApplication::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'image' => $this->faker->word(),
            'text' => $this->faker->text(),
            'manager_name' => $this->faker->word(),
            'employ_phone' => $this->faker->word(),
            'reception_name' => $this->faker->word(),
            'reception_phone' => $this->faker->word(),
            'control_name' => $this->faker->word(),
            'control_phone' => $this->faker->word(),
        ];
    }
}
