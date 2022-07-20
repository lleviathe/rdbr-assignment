<?php

namespace App\Models;

use App\Traits\HasCandidate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasCandidate, HasFactory;

    protected $fillable = ['title'];
}
