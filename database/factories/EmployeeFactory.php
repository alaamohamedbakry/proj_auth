<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>$this->faker->name(),
            'age'=>$this->faker->randomDigit(2),
            'company'=>$this->faker->country(),
            'country'=>$this->faker->country(),
            'job_title'=>$this->faker->jobTitle(),
            'department'=>$this->faker->sentence(2),
            'address'=>$this->faker->streetAddress(),
            'mobile'=>$this->faker->phoneNumber(),
        ];
    }
}
