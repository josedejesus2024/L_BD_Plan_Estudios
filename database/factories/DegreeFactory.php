<?php

namespace Database\Factories;

use App\Models\Degree;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Grado>
 */
class DegreeFactory extends Factory
{
    protected $model = Degree::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'grado' => $this->faker->randomElement(['uno', 'dos', 'tres'])
        ];
    }
}
