<?php

namespace App\Http\Resources;

use App\Models\Service;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Class ServiceResource
 * @package App\Http\Resources
 *
 * @mixin Service
 */
class ServiceResource extends JsonResource
{
    public function toArray($request): array
    {
        return $this->only([
            'id', 'title', 'description', 'created_at', 'updated_at'
        ]);
    }
}
