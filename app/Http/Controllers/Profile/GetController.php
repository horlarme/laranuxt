<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class GetController extends Controller
{
    public function __invoke(Request $request): JsonResponse
    {
        return $this->success(
            __('Successful'),
            data: new UserResource(
                User::query()->first()
            )
        );
    }
}
