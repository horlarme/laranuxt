<?php

namespace App\Http\Controllers\Skills;

use App\Http\Controllers\Controller;
use App\Http\Resources\SkillResource;
use App\Models\Skill;
use Illuminate\Http\Request;

class GetController extends Controller
{
    public function __invoke(Skill $skill, Request $request)
    {
        return $this->success(data: new SkillResource($skill));
    }
}
