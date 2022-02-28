<?php

namespace Tests\Feature;

use App\Models\Experience;
use Symfony\Component\HttpFoundation\Response;
use Tests\TestCase;

class ExperienceTest extends TestCase
{
    public function testListExperiences()
    {
        $this->getJson(route('experiences'))
            ->assertStatus(Response::HTTP_OK)
            ->assertJsonStructure([
                'data' => [
                    'data'
                ]
            ]);
    }

    public function testDeleteExperience()
    {
        $experience = Experience::factory()->create();
        $this->deleteJson(route('experiences.delete', $experience['id']))
            ->assertStatus(Response::HTTP_NO_CONTENT);

        $this->assertDeleted($experience);
    }

    public function testGetSingleExperience()
    {
        $experience = Experience::factory()->create();
        $this->getJson(route('experiences.get', $experience['id']))
            ->assertStatus(Response::HTTP_OK)
            ->assertSeeText($experience['title'])
            ->assertJsonStructure([
                'data' => [
                    'data'
                ]
            ]);
    }

    public function testCreateNewExperience()
    {
        $experience = Experience::factory()->make(['stopped_at' => today()]);

        $this->postJson(route('experiences.create'), $experience->toArray())
            ->assertStatus(Response::HTTP_CREATED);

        unset($experience['stopped_at']); // for testing present experience

        $this->postJson(route('experiences.create'), $experience->toArray())
            ->assertStatus(Response::HTTP_CREATED);
    }

    public function testUpdateExperience()
    {
        $experience = Experience::factory()->create();
        $this->patchJson(route('experiences.update', $experience['id']), $experience->toArray())
            ->assertStatus(Response::HTTP_OK)
            ->assertJsonStructure([
                'data' => ['company', 'id', 'position']
            ]);
    }
}
