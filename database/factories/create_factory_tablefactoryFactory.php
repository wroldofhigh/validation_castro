<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class create_factory_tablefactoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'task_name' => fake()->sentence(0),
            'status' => fake()->randomElement(['pending', 'On process', 'Complete', 'Cancelled']),
            'description' => fake()->paragraph(),
            'deadline' =>fake()->date('Y-m-d')
        ];
    }
}
