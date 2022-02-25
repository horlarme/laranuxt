<?php

namespace App\Http\Controllers\Services;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class DeleteController extends Controller
{
    public function __invoke(Service $service, Request $request): JsonResponse
    {
        $service->delete();
        return $this->render(code: Response::HTTP_NO_CONTENT);
    }
}
