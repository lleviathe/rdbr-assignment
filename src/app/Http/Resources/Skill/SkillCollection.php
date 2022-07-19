<?php

namespace App\Http\Resources\Skill;

use Illuminate\Http\Resources\Json\ResourceCollection;

class SkillCollection extends ResourceCollection
{
    public function toArray($request): array
    {
        return parent::toArray($request);
    }
}
