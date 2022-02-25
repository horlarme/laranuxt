<?php

namespace App\Http\Controllers\Services;

use App\Http\Controllers\Controller;
use App\Http\Requests\Services\UpdateRequest;
use App\Http\Resources\ServiceResource;
use App\Models\Service;
use Illuminate\Http\JsonResponse;

class UpdateController extends Controller
{
    public function __invoke(Service $service, UpdateRequest $request): JsonResponse
    {
        $service->update($request->validated());
        return $this->success(data: new ServiceResource($service));
    }
}
