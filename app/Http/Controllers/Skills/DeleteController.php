<?php

namespace App\Http\Controllers\Skills;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DeleteController extends Controller
{
    public function __invoke(Skill $skill, Request $request): JsonResponse
    {
        $skill->delete();
        return $this->render(code: Response::HTTP_NO_CONTENT);
    }
}
