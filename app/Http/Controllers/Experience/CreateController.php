<?php

namespace App\Http\Controllers\Experience;

use App\Http\Controllers\Controller;
use App\Http\Requests\Experiences\CreateRequest;
use App\Http\Resources\ExperienceResource;
use App\Models\Experience;
use Symfony\Component\HttpFoundation\Response;

class CreateController extends Controller
{
    public function __invoke(CreateRequest $request)
    {

        return $this->render(
            data: new ExperienceResource(
                Experience::query()->create($request->validated())
            ),
            code: Response::HTTP_CREATED
        );
    }
}
