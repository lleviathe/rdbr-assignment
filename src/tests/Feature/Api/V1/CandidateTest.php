<?php

namespace Tests\Feature\Api\V1;

use App\Enums\RecruitmentStatus;
use App\Models\Candidate;
use App\Models\Skill;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response as R;
use Tests\TestCase;

class CandidateTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_retrieve_candidates(): void
    {
        Candidate::factory()->create();

        $response = $this->getJson(route('api.v1.candidates.index'));

        $response->assertStatus(200);
        $response->assertJsonCount(1);
    }

    public function test_can_retrieve_candidate(): void
    {
        $candidate = Candidate::factory()->create();

        $response = $this->getJson(route('api.v1.candidates.show', $candidate));

        $response->assertStatus(200);
        $response->assertJsonFragment([
            'id' => $candidate->id,
            'first_name' => $candidate->first_name,
            'last_name' => $candidate->last_name,
            'email' => $candidate->email,
            'phone' => $candidate->phone,
            'created_at' => $candidate->created_at->toISOString(),
            'updated_at' => $candidate->updated_at->toISOString(),
        ]);
    }

    public function test_can_store_candidate(): void
    {
        Storage::fake();

        $candidate = [
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'test@example.com',
            'phone' => '+1 (555) 555-5555',
            'years_of_experience' => 10,
            'salary_from' => 100,
            'salary_to' => 200,
            'linkedin_url' => 'https://www.linkedin.com/in/johndoe',
            'position' => 'Software Engineer',
        ];

        $response = $this->postJson(
            route('api.v1.candidates.store'),
            array_merge($candidate, [
                'cv' => UploadedFile::fake()->create(
                    'cv.pdf',
                    1024,
                    'application/pdf'
                ),
            ])
        );

        $response->assertStatus(R::HTTP_CREATED);
        $this->assertDatabaseHas(
            'candidates',
            array_merge(
                $candidate,
                [
                    'status' => RecruitmentStatus::INITIAL,
                ]
            )
        );
        Storage::assertExists(
            'cvs/' . $response->json('id') . '/cv.pdf'
        );
    }

    public function test_can_update_candidate(): void
    {
        $candidate = Candidate::factory()->create();
        $updatedCandidate = [
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'john.doe@example.com',
            'position' => 'PHP Engineer',
        ];

        $response = $this->patchJson(
            route('api.v1.candidates.update', $candidate),
            $updatedCandidate
        );

        $response->assertStatus(R::HTTP_OK);
        $this->assertDatabaseHas(
            'candidates',
            $updatedCandidate
        );
    }

    public function test_can_delete_candidate(): void
    {
        $candidate = Candidate::factory()->create();

        $response = $this->deleteJson(
            route('api.v1.candidates.destroy', $candidate)
        );

        $response->assertStatus(R::HTTP_NO_CONTENT);
        $this->assertDatabaseHas(
            'candidates',
            [
                'id' => $candidate->id,
                'deleted_at' => now()->toDateTimeString(),
            ]
        );
    }

    // test can attach cv to the candidate
    public function test_can_attach_cv_to_candidate(): void
    {
        Storage::fake();

        $candidate = Candidate::factory()->create();
        $cv = UploadedFile::fake()->create('cv.pdf', 1024, 'application/pdf');

        $response = $this->patchJson(
            route('api.v1.candidates.update', $candidate),
            [
                'cv' => $cv,
            ]
        );

        $response->assertStatus(R::HTTP_OK);
//        dump($response->json());
        $this->assertDatabaseHas(
            'candidates',
            [
                'id' => $candidate->id,
                'cv_url' => $response->json('cv_url'),
            ]
        );
        Storage::assertExists(
            'cvs/' . $response->json('id') . '/cv.pdf'
        );
    }

    public function test_can_update_candidate_skills(): void
    {
        $candidate = Candidate::factory()->create();
        $skills = Skill::factory()->count(3)->create();
        $response = $this->post(
            route('api.v1.candidates.updateSkills', $candidate),
            [
                'skills' => $skills->pluck('id')->toArray(),
            ]
        );

        $response->assertStatus(R::HTTP_OK);
        $this->assertDatabaseHas('candidate_skill', [
            'candidate_id' => $candidate->id,
            'skill_id' => $skills->first()->id,
        ]);

        $updatedSkills = Skill::factory()->count(2)->create();
        $response = $this->post(
            route('api.v1.candidates.updateSkills', $candidate),
            [
                'skills' => $updatedSkills->pluck('id')->toArray(),
            ]
        );

        $response->assertStatus(R::HTTP_OK);
        $this->assertDatabaseMissing('candidate_skill', [
            'candidate_id' => $candidate->id,
            'skill_id' => $skills->first()->id,
        ]);
        $this->assertDatabaseHas('candidate_skill', [
            'candidate_id' => $candidate->id,
            'skill_id' => $updatedSkills->first()->id,
        ]);
    }
}
