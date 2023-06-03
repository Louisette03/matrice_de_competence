<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Module>
 */
class ModuleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'domain_id' => fake()->numberBetween(int1:1, int2:10),
            'libel' => fake()->words(3, asText:true),
            'description' => fake()->text(20),
        ];
    }
}
