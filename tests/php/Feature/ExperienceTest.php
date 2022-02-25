<?php

namespace Tests\Feature;

use App\Models\Experience;
use Symfony\Component\HttpFoundation\Response;
use Tests\TestCase;

class ExperienceTest extends TestCase
{
    public function testListExperiences()
    {
        $this->getJson(route('experience'))
            ->assertStatus(Response::HTTP_OK)
            ->assertJsonStructure([
                'data' => [
                    'data'
                ]
            ]);
    }

    public function testDeleteExperience()
    {
        $service = Experience::factory()->create();
        $this->deleteJson(route('experience.delete'), $service['id'])
            ->assertStatus(Response::HTTP_NO_CONTENT);

        $this->assertDeleted($service);
    }

    public function testGetSingleExperience()
    {
        $service = Experience::factory()->create();
        $this->getJson(route('experience.get', $service['id']))
            ->assertStatus(Response::HTTP_OK)
            ->assertSeeText($service['title'])
            ->assertJsonStructure([
                'data' => [
                    'data'
                ]
            ]);
    }

    public function testCreateNewExperience()
    {
        $experience = Experience::factory()->make();
        $this->postJson(route('experiences.create'), $experience->toArray())
            ->assertStatus(Response::HTTP_CREATED);
    }

    public function testUpdateExperience()
    {
        $service = Experience::query()->first();
        $this->patchJson(route('experience.update'), $service->toArray())
            ->assertStatus(Response::HTTP_OK)
            ->assertJsonStructure([
                'data' => [
                    'data'
                ]
            ]);
    }
}
