<?php

namespace App\Http\Controllers\Services;

use App\Http\Controllers\Controller;
use App\Http\Resources\ServiceResource;
use App\Models\Service;
use Illuminate\Http\Request;

class GetController extends Controller
{
    public function __invoke(Service $service, Request $request)
    {
        return $this->success(data: new ServiceResource($service));
    }
}
