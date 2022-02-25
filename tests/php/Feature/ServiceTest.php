<?php

namespace Tests\Feature;

use App\Models\Service;
use Symfony\Component\HttpFoundation\Response;
use Tests\TestCase;

class ServiceTest extends TestCase
{
    public function testCreateNewService()
    {
        $service = Service::factory()->make();
        $this->postJson(route('services.create'), $service->toArray())
            ->assertStatus(Response::HTTP_CREATED);
    }

    public function testUpdateService()
    {
        $service = Service::query()->first();
        $this->patchJson(route('services.update', $service['id']), $service->toArray())
            ->assertStatus(Response::HTTP_OK)
            ->assertJsonStructure([
                'data' => [
                    'data' => [
                        'title', 'description'
                    ]
                ]
            ]);
    }

    public function testGetServiceList()
    {
        $this->getJson(route('services'))
            ->assertStatus(Response::HTTP_OK)
            ->assertJsonStructure([
                'data' => [
                    'data'
                ]
            ]);
    }

    public function testGetSingleService()
    {
        $service = Service::factory()->create();
        $this->getJson(route('services.get', $service['id']))
            ->assertStatus(Response::HTTP_OK)
            ->assertJsonStructure([
                'data' => [
                    'data' => ['title', 'description']
                ]
            ]);
    }

    public function testDeleteService()
    {
        $service = Service::factory()->create();
        $this->deleteJson(route('services.delete', $service['id']))
            ->assertStatus(Response::HTTP_NO_CONTENT);

        $this->assertDeleted($service);
    }
}
