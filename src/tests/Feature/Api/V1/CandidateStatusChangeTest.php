<?php

namespace Tests\Feature\Api\V1;

use App\Enums\RecruitmentStatus;
use App\Models\Candidate;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Symfony\Component\HttpFoundation\Response as R;
use Tests\TestCase;

class CandidateStatusChangeTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_change_candidate_status(): void
    {
        $candidate = Candidate::factory()->create();

        $response = $this->patchJson(
            route('api.v1.candidates.changeStatus', $candidate),
            [
                'status' => RecruitmentStatus::HIRED->value,
            ]
        );

        $response->assertStatus(R::HTTP_OK);
        $this->assertDatabaseHas('candidates', [
            'id' => $candidate->id,
            'status' => RecruitmentStatus::HIRED,
        ]);
        $this->assertDatabaseHas('candidate_status_changes', [
            'candidate_id' => $candidate->id,
            'status_before' => $candidate->status,
            'status_after' => RecruitmentStatus::HIRED,
        ]);
    }

    public function test_can_change_candidate_status_with_comment(): void
    {
        $candidate = Candidate::factory()->create();

        $response = $this->patchJson(
            route('api.v1.candidates.changeStatus', $candidate),
            [
                'status' => RecruitmentStatus::HIRED->value,
                'comment' => 'status changed to hired'
            ]
        );

        $response->assertStatus(R::HTTP_OK);
        $this->assertDatabaseHas('candidates', [
            'id' => $candidate->id,
            'status' => RecruitmentStatus::HIRED,
        ]);
        $this->assertDatabaseHas('candidate_status_changes', [
            'candidate_id' => $candidate->id,
            'status_before' => $candidate->status,
            'status_after' => RecruitmentStatus::HIRED,
            'comment' => 'status changed to hired',
        ]);
    }

    public function test_can_retrieve_candidate_timeline(): void
    {
        $candidate = Candidate::factory()->create();

        $response = $this->patchJson(
            route('api.v1.candidates.changeStatus', $candidate),
            [
                'status' => RecruitmentStatus::HIRED->value,
                'comment' => 'status changed to hired'
            ]
        );

        $response->assertStatus(R::HTTP_OK);

        $timeline = $this->getJson(
            route('api.v1.candidates.timeline', $candidate)
        );

        $timeline->assertStatus(R::HTTP_OK);
        $timeline->assertJsonFragment([
            'status_before' => $candidate->status,
            'status_after' => RecruitmentStatus::HIRED,
            'comment' => 'status changed to hired',
        ]);
    }
}
