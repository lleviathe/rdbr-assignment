<?php

namespace App\Http\Requests\Candidate;

use App\Enums\RecruitmentStatus;
use Illuminate\Foundation\Http\FormRequest;
use Spatie\LaravelOptions\Options;

class UpdateCandidateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'first_name' => 'sometimes|string|max:255',
            'last_name' => 'sometimes|string|max:255',
            'email' => 'sometimes|string|email|max:255|unique:candidates',
            'phone' => 'sometimes|string|max:255|unique:candidates',
            'position' => 'sometimes|string|max:255',
            'years_of_experience' => 'sometimes|integer|min:0',
            'salary_from' => 'sometimes|integer|min:0',
            'salary_to' => 'sometimes|integer|gte:salary_from',
            'linkedin_url' => 'sometimes|string|max:255',
            'skills' => 'sometimes|array|exists:skills,id'
        ];
    }
}
