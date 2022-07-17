<?php

namespace App\Enums;

enum RecruitmentStatus: string
{
    case INITIAL = 'initial';
    case FIRST_CONTACT = 'first_contact';
    case INTERVIEW = 'interview';
    case TECH_ASSIGNMENT = 'tech_assignment';
    case REJECTED = 'rejected';
    case HIRED = 'hired';
}
