<?php

namespace Database\Factories;

use App\Models\JobCategory;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Jobs>
 */
class JobsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::all()->random(),
            'job_category_id' => JobCategory::all()->random(),
            'job_title' => fake()->name(),
            'description' => fake()->sentence(),
            'min_salary' => '10000',
            'max_salary' => '30000',
            'qualification' => fake()->sentence(20),
            'responsibility' => fake()->text(20),
            'experience' => '3',
            'company_address' => fake()->address(),
            'role' => fake()->name(),
        ];
    }
}
