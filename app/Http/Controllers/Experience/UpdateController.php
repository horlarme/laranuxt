<?php

namespace App\Http\Controllers\Experience;

use App\Http\Controllers\Controller;
use App\Http\Requests\Experiences\UpdateRequest;
use App\Http\Resources\ExperienceResource;
use App\Models\Experience;

class UpdateController extends Controller
{
    public function __invoke(Experience $experience, UpdateRequest $request)
    {
        $experience->update($request->validated());
        return $this->render(data: new ExperienceResource($experience));
    }
}
