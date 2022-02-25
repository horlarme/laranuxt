<?php

namespace App\Http\Controllers\Experience;

use App\Http\Controllers\Controller;
use App\Http\Resources\ExperienceResource;
use App\Models\Experience;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class GetController extends Controller
{
    public function __invoke(Experience $experience, Request $request): JsonResponse
    {
        return $this->success(
            data: new ExperienceResource($experience)
        );
    }
}
