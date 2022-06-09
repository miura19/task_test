<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFormFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "your_name" => $this->faker->name,
            "title" => $this->faker->realText(10),
            "url" => $this->faker->url(),
            "email" => $this->faker->unique()->email,
            "gender" => $this->faker->randomElement(['0','1']),
            "age" => $this->faker->numberBetween(1,6),
            "contact" => $this->faker->realText(200),
        ];
    }
}
