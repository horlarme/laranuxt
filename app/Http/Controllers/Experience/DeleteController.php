<?php

namespace App\Http\Controllers\Experience;

use App\Http\Controllers\Controller;
use App\Models\Experience;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DeleteController extends Controller
{
    public function __invoke(Experience $experience, Request $request): JsonResponse
    {
        $experience->delete();
        return $this->render(code: Response::HTTP_NO_CONTENT);
    }
}
