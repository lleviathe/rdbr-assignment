<?php

namespace Database\Factories;

use App\Enums\RecruitmentStatus;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CandidateStatusChange>
 */
class CandidateStatusChangeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'status_before' => $this->faker->randomElement(
                array_map(static fn($status) => $status->value, RecruitmentStatus::cases())
            ),
            'status_after' => $this->faker->randomElement(
                array_map(static fn($status) => $status->value, RecruitmentStatus::cases())
            ),
            'comment' => $this->faker->text,
        ];
    }
}
