<?php

namespace App\Http\Resources\Candidate;

use App\Http\Resources\CandidateStatusChange\CandidateStatusChangeResource;
use App\Http\Resources\Skill\SkillResource;
use Illuminate\Http\Resources\Json\JsonResource;

class CandidateResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'phone' => $this->phone,
            'position' => $this->position,
            'years_of_experience' => $this->years_of_experience,
            'salary_from' => $this->salary_from,
            'salary_to' => $this->salary_to,
            'linkedin_url' => $this->linkedin_url,
            'status' => $this->status,
            'skills' => SkillResource::collection($this->skills),
            'timeline' => CandidateStatusChangeResource::collection($this->whenLoaded('statusChanges')),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
