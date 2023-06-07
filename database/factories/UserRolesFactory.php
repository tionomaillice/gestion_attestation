<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UserRolesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numerify('#'),
            'role_id' => $this->faker->numerify('#')

            //
        ];
    }
}
