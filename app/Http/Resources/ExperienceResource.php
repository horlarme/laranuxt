<?php

namespace App\Http\Resources;

use App\Models\Experience;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Class ExperienceResource
 * @package App\Http\Resources
 *
 * @mixin Experience
 */
class ExperienceResource extends JsonResource
{
    public function toArray($request): array
    {
        return $this->only([
            'company', 'id', 'position', 'started_at', 'created_at',
            'stopped_at', 'updated_at', 'description'
        ]);
    }
}
