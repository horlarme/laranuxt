<?php

namespace App\Http\Controllers\Skills;

use App\Http\Controllers\Controller;
use App\Http\Resources\SkillResource;
use App\Models\Skill;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ListController extends Controller
{
    public function __invoke(Request $request): JsonResponse
    {
        return $this->success(data: SkillResource::collection(Skill::all()));
    }
}
