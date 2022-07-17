<?php

namespace Tests\Feature\Api\V1;

use App\Models\Candidate;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CandidateTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_retrieve_candidates()
    {
        Candidate::factory()->create();

        $response = $this->getJson(route('api.v1.candidates.index'));

        $response->assertStatus(200);
        $response->assertJsonCount(1);
    }
}
