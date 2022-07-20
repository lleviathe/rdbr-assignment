<?php

namespace App\Http\Resources\CandidateStatusChange;

use Illuminate\Http\Resources\Json\ResourceCollection;

class CandidateStatusChangeCollection extends ResourceCollection
{
    public function toArray($request): array
    {
        return parent::toArray($request);
    }
}
