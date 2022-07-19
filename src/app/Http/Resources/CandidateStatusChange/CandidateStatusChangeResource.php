<?php

namespace App\Http\Resources\CandidateStatusChange;

use Illuminate\Http\Resources\Json\JsonResource;

class CandidateStatusChangeResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'candidate_id' => $this->candidate_id,
            'status_before' => $this->status_before,
            'status_after' => $this->status_after,
            'comment' => $this->comment,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
