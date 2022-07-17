<?php

namespace App\Models;

use App\Traits\HasCandidate;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Pivot;

class CandidateSkill extends Pivot
{
    use HasCandidate;

    protected $fillable = ['candidate_id', 'skill_id'];

    public function skill(): BelongsTo
    {
        return $this->belongsTo(Skill::class);
    }
}
