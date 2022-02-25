<?php

namespace App\Http\Controllers\Skills;

use App\Http\Controllers\Controller;
use App\Http\Requests\Skills\UpdateRequest;
use App\Http\Resources\SkillResource;
use App\Models\Skill;
use Illuminate\Http\JsonResponse;

class UpdateController extends Controller
{
    public function __invoke(Skill $skill, UpdateRequest $request): JsonResponse
    {
        $skill->update($request->validated());
        return $this->success(data: new SkillResource($skill));
    }
}
