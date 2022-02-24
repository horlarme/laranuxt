<?php

namespace App\Http\Resources;

use App\Models\Experience;
use App\Models\Service;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Class UserResource
 * @package App\Http\Resources
 *
 * @mixin User
 */
class UserResource extends JsonResource
{
    public function toArray($request): array
    {
        $data = $this->only([
            'full_name', 'email', 'id', 'social_linkedin', 'social_github',
            'social_twitter', 'social_facebook', 'social_instagram',
            'created_at', 'updated_at'
        ]);

        $data['services'] = ServiceResource::collection(Service::all());
        $data['skills'] = SkillResource::collection(Skill::all());
        $data['experiences'] = ExperienceResource::collection(Experience::all());

        return $data;
    }
}
