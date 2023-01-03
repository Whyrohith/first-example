<?php

namespace Database\Factories;


use App\Models\Character;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Character>
 */
class CharacterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstname(),
            'weight' => $this->faker->numberBetween(20,100),
            'haki' => $this->faker->randomElement(['Yes','No']),
            'power' => $this->faker->lastname(),
            'height' =>$this->faker->numberBetween(69,178),
        ];
    }
}
