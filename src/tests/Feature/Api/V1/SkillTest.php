<?php

namespace Tests\Feature\Api\V1;

use App\Models\Skill;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Symfony\Component\HttpFoundation\Response as R;
use Tests\TestCase;

class SkillTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_retrieve_skills(): void
    {
        Skill::factory()->create();

        $response = $this->getJson(route('api.v1.skills.index'));

        $response->assertStatus(200);
        $response->assertJsonPath('data.0.id', 1);
    }

    public function test_can_retrieve_skill(): void
    {
        $skill = Skill::factory()->create();

        $response = $this->getJson(route('api.v1.skills.show', $skill));

        $response->assertStatus(200);
        $response->assertJsonFragment([
            'id' => $skill->id,
            'title' => $skill->title,
            'created_at' => $skill->created_at->toISOString(),
            'updated_at' => $skill->updated_at->toISOString(),
        ]);
    }

    public function test_can_store_skill(): void
    {
        $skill = [
            'title' => 'PHP',
        ];
        $response = $this->postJson(
            route('api.v1.skills.store'),
            $skill
        );
        $response->assertStatus(R::HTTP_CREATED);
        $response->assertJsonFragment([
            'title' => 'PHP',
        ]);
    }

    public function test_can_update_skill(): void
    {
        $skill = Skill::factory()->create();

        $response = $this->putJson(
            route('api.v1.skills.update', $skill),
            ['title' => 'PHP']
        );
        $response->assertStatus(R::HTTP_OK);
        $response->assertJsonFragment([
            'title' => 'PHP',
        ]);
    }

    public function test_can_delete_skill(): void
    {
        $skill = Skill::factory()->create();

        $response = $this->deleteJson(
            route('api.v1.skills.destroy', $skill)
        );
        $response->assertStatus(R::HTTP_NO_CONTENT);
    }
}
