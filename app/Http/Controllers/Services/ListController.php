<?php

namespace App\Http\Controllers\Services;

use App\Http\Controllers\Controller;
use App\Http\Resources\ServiceResource;
use App\Models\Service;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ListController extends Controller
{
    public function __invoke(Request $request): JsonResponse
    {
        return $this->success(data: ServiceResource::collection(Service::all()));
    }
}
