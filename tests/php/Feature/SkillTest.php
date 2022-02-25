<?php

namespace Tests\Feature;

use App\Models\Skill;
use Illuminate\Http\Response;
use Tests\TestCase;

class SkillTest extends TestCase
{
    public function testDeleteSkill()
    {
        $skill = Skill::factory()->create();
        $this->delete(route('skill.delete', $skill['id']))
            ->assertStatus(200);
        $this->assertDeleted($skill);
    }

    public function testCreateSkill()
    {
        $skill = Skill::factory()->make();
        $this->postJson(route('skills.create'), $skill->toArray())
            ->assertStatus(Response::HTTP_CREATED);
    }

    public function testUpdateSkill()
    {
        $skill = Skill::factory()->create();
        $this->patchJson(route('skills.update'), $skill->toArray())
            ->assertJsonStructure([
                'data' => [
                    'data' => [
                        'title'
                    ]
                ]
            ]);
    }

    public function testFetchSkills()
    {
        $this->get(route('skills'))
            ->assertStatus(200)
            ->assertJsonStructure([
                'data' => [
                    'data' => [
                        'title',
                        'created_at'
                    ]
                ]
            ]);
    }

    public function testGetSkill()
    {
        $skill = Skill::factory()->create();

        $this->get(route('skills.get', $skill['id']))
            ->assertStatus(Response::HTTP_OK);
    }

    public function testQueryInvalidSkillWithId()
    {
        $this->markTestSkipped('To be implemented');
    }
}
