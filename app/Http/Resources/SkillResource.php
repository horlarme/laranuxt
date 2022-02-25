<?php

namespace App\Http\Resources;

use App\Models\Skill;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Class SkillResource
 * @package App\Http\Resources
 *
 * @mixin Skill
 */
class SkillResource extends JsonResource
{
    public function toArray($request): array
    {
        return $this->only(['id', 'title', 'created_at', 'updated_at']);
    }
}
