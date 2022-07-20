<?php

namespace App\Models;

use App\Enums\RecruitmentStatus;
use App\Traits\HasCandidate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateStatusChange extends Model
{
    use HasCandidate, HasFactory;

    protected $fillable = [
        'candidate_id',
        'status_before',
        'status_after',
        'comment',
    ];

    protected $casts = [
        'status_before' => RecruitmentStatus::class,
        'status_after' => RecruitmentStatus::class,
    ];
}
