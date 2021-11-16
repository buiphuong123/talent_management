<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'schedule_id' => rand(1, 10),
            'user_id' => rand(2,20),
            'status' => rand(0, 3)
        ];
    }
}
