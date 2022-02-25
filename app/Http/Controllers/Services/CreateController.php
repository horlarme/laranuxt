<?php

namespace App\Http\Controllers\Services;

use App\Http\Controllers\Controller;
use App\Http\Requests\Services\CreateRequest;
use App\Http\Resources\ServiceResource;
use App\Models\Service;
use Symfony\Component\HttpFoundation\Response;

class CreateController extends Controller
{
    public function __invoke(CreateRequest $request)
    {
        return $this->render(
            data: new ServiceResource(Service::query()->create($request->validated())),
            code: Response::HTTP_CREATED
        );
    }
}
