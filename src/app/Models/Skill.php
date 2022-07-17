<?php

namespace App\Models;

use App\Traits\HasCandidate;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasCandidate;

    protected $fillable = ['title'];
}
