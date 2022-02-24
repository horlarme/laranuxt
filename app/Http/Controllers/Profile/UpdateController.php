<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\Profile\UpdateRequest;
use App\Http\Resources\UserResource;
use App\Models\User;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request)
    {
        $profile = User::query()->first();

        $profile->update(
            $request->validated()
        );

        return $this->success(
            __('Updated'),
            data: new UserResource(
                $profile
            )
        );
    }
}
