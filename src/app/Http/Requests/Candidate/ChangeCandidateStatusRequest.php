<?php

namespace App\Http\Requests\Candidate;

use App\Enums\RecruitmentStatus;
use Illuminate\Foundation\Http\FormRequest;
use Spatie\LaravelOptions\Options;

class ChangeCandidateStatusRequest extends FormRequest
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
            'status' => Options::forEnum(RecruitmentStatus::class)->toValidationRule(),
            'comment' => 'sometimes|string',
        ];
    }
}
