<?php

namespace App\Enums;

enum RecruitmentStatus: string
{
    case INITIAL = 'Initial';
    case FIRST_CONTACT = 'First Contact';
    case INTERVIEW = 'Interview';
    case TECH_ASSIGNMENT = 'Tech Assignment';
    case REJECTED = 'Rejected';
    case HIRED = 'Hired';
}
