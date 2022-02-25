<?php

namespace App\Http\Controllers\Skills;

use App\Http\Controllers\Controller;
use App\Http\Requests\Skills\CreateRequest;
use App\Http\Resources\SkillResource;
use App\Models\Skill;
use Symfony\Component\HttpFoundation\Response;

class CreateController extends Controller
{
    public function __invoke(CreateRequest $request)
    {
        return $this->render(
            data: new SkillResource(Skill::query()->create($request->validated())),
            code: Response::HTTP_CREATED
        );
    }
}
