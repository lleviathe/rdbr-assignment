<?php

namespace Tests\Feature\Api\V1;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CandidateTest extends TestCase
{
    public function test_can_retrieve_candidates()
    {
        $response = $this->getJson(route('api.v1.candidates.index'));

        $response->assertStatus(200);
    }
}
