<?php

namespace App\Models;

use App\Enums\RecruitmentStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Candidate extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'position',
        'years_of_experience',
        'salary_from',
        'salary_to',
        'source',
        'linkedin_url',
        'status',
    ];

    protected $casts = [
        'status' => RecruitmentStatus::class
    ];

    public function statusChanges(): HasMany
    {
        return $this->hasMany(CandidateStatusChange::class);
    }

    public function skills(): BelongsToMany
    {
        return $this->belongsToMany(Skill::class);
    }

    public function getFullNameAttribute(): string
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function getSalaryRangeAttribute(): string
    {
        return $this->salary_from . ' - ' . $this->salary_to;
    }
}
