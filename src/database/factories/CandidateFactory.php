<?php

namespace Database\Factories;

use App\Enums\RecruitmentStatus;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Candidate>
 */
class CandidateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'email' => $this->faker->safeEmail,
            'phone' => $this->faker->phoneNumber,
            'position' => $this->faker->jobTitle,
            'years_of_experience' => $this->faker->numberBetween(1, 10),
            'salary_from' => $this->faker->numberBetween(1000, 4000),
            'salary_to' => $this->faker->numberBetween(2000, 6000),
            'linkedin_url' => $this->faker->url,
            'cv_url' => $this->faker->url,
            'status' => $this->faker->randomElement(
                array_map(static fn ($status) => $status->value, RecruitmentStatus::cases())
            ),
        ];
    }
}
