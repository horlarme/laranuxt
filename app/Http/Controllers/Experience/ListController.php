<?php

namespace App\Http\Controllers\Experience;

use App\Http\Controllers\Controller;
use App\Http\Resources\ExperienceResource;
use App\Models\Experience;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ListController extends Controller
{
    public function __invoke(Request $request): JsonResponse
    {
        return $this->success(data: ExperienceResource::collection(
            Experience::latest('stopped_at')->get()
        ));
    }
}
