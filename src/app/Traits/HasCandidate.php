<?php

namespace App\Traits;

use App\Models\Candidate;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait HasCandidate
{
    public function candidate(): BelongsTo
    {
        return $this->belongsTo(Candidate::class);
    }
}
